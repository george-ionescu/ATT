<?php

class RejoindreController extends Zend_Controller_Action
{

    public function init()
    {
        // Get all jobs category
        // -------------------------
        $modelMetier = new Model_DbTable_Metiers();
        $metiers = $modelMetier->getDatas();
        $this->view->metiers = $metiers;
        
        // Get notre entreprise text
        // ----------------------
        $model = new Model_DbTable_Vitrine();
        $txtEntreprise = $model->getDatas('notre-entreprise');
        $this->view->txtEntreprise = $txtEntreprise;
    }

    public function indexAction()
    {	
    	// Get datas page
    	// -------------------------
    	$model = new Model_DbTable_Rejoindre();
    	$datas = $model->getDatas();
    	$this->view->datas = $datas;
    	
    	// Set Metas
    	//--------------------------
    	$modelMetas = new Model_DbTable_Metas();
    	$modelMetas->setMetas('Rejoignez-nous');
    }
    
    public function offresEmploiAction()
    {
        // Get datas posted
        // --------------------------
        $post = $this->_request->getPost();
    
        // Get all jobs
        // --------------------------
        $model = new Model_DbTable_Emplois();
        if (isset($post['metier'])) {
            $jobs = $model->getEmplois($post['metier']);
        } else {
            $jobs = $model->getEmplois();
        }
    
        // Create pagination if no datas posted
        // --------------------------
        if (!isset($post['metier'])) {
            $paginator = Zend_Paginator::factory($jobs);
            $page = $this->_getParam('page', 1);
            $paginator->setCurrentPageNumber($page)
            ->setPageRange(6)
            ->setItemCountPerPage(4)
            ->setDefaultScrollingStyle('Jumping');
    
            $this->view->jobs = $paginator;
            $this->view->pagination = true;
        } else {
            $this->view->jobs = $jobs;
        }
    
        // Set Metas
    	//--------------------------
    	$modelMetas = new Model_DbTable_Metas();
    	$modelMetas->setMetas("Offres d'emploi");
    
    }
    
    public function candidatureSpontaneeAction()
    {
        // Create form
        // --------------------------
        $formCandidature = new Form_Candidature();
        $this->view->form = $formCandidature;
    
        // Validate form
        // --------------------------
        if ($this->_request->isPost()) {
            $data = $this->_request->getPost();
    
            // Form is correct
            // ------------------------
            if ($formCandidature->isValid($data)) {
    
                // Rename the file uploaded
                // ----------------------
                $fileInfos = $formCandidature->cv->getFileInfo();
                $originFileName = $fileInfos['cv']['name'];
                list ($fileName, $ext) = $this->view->getFileExtension($originFileName);
                $newFileName = $fileName . '-' . time() . $ext;
                $formCandidature->cv->addFilter('Rename', $newFileName);
                
                $fileInfos = $formCandidature->lettreMotivation->getFileInfo();
                $originLMName = $fileInfos['lettreMotivation']['name'];
                list ($fileLMName, $ext) = $this->view->getFileExtension($originLMName);
                $newFileLMName = $fileLMName . '-' . (time() + 1) . $ext;
                $formCandidature->lettreMotivation->addFilter('Rename', $newFileLMName);
                 
                if ($formCandidature->cv->receive() && $formCandidature->lettreMotivation->receive()) {
                    	
                    // Build mail
                    // --------------------
                    $mail = new Zend_Mail('utf-8');
                    $mail->setBodyText(
                            'Nom, prénom : ' . $data['nom'] .
                            '\nEmail : ' . $data['email'] .
                            '\nTéléphone : ' . $data['tel'] .
                            '\nMessage :\n' . $data['message'],
                            '\nIP : ' . $_SERVER['REMOTE_ADDR']);
                    $mail->setBodyHtml(
                            '<strong>Nom, prénom</strong> : ' . $data['nom'] .
                            '<br /><strong>Email</strong> : ' .$data['email'] .
                            '<br /><strong>Téléphone</strong> : ' . $data['tel'] .
                            '<br /><strong>Message</strong> :<br />' . nl2br($data['message']).
                            '<br /><strong>IP</strong> : ' .$_SERVER['REMOTE_ADDR']);
                    	
                    // Attachment
                    // --------------------
                    $attachment = $mail->createAttachment(file_get_contents($formCandidature->cv->getFileName()));
                    $attachment->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
                    $attachment->filename = $newFileName;
                    
                    $attachment = $mail->createAttachment(file_get_contents($formCandidature->lettreMotivation->getFileName()));
                    $attachment->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
                    $attachment->filename = $newFileLMName;
                    	
                    $mail->setFrom($data['email'], $data['nom'])
                      ->addTo('rlalaux@milleetunecommunications.fr')
                    ->addBcc('jsmaurage@milleetunefenetres.fr')
                    //->addBcc('jcouadier@milleetunefenetres.fr')
                    ->setReplyTo($data['email'])->setSubject('Nouvelle canditature spontanée');
                    try {
                        // Send mail
                        // --------------------
                        $mail->send();
                        $this->view->placeHolderReturn .= '<div class="success">Votre message a bien été envoyé et sera traité dans les plus brefs délais</div>';
                        $formCandidature->reset();
    
                        // Unlink file uploaded
                        // --------------------
                        unlink('./docs/' . $newFileName);
                        unlink('./docs/' . $newFileLMName);
    
                    } catch (Zend_Mail_Exception $e) {
                        $this->view->placeHolderReturn .= '<div class="error">Une erreur s\'est produite lors de l\'envoi du message.<br />Veuillez réessayer ultérieurement</div>';
                    }
                } else {
                    $this->view->placeHolderReturn .= '<div class="error">Une erreur s\'est produite lord de l\'envoi de votre cv.<br />Veuillez réessayer ultérieurement.</div>';
                    $formCandidature->populate($data);
                }
            } else {
                $this->view->placeHolderReturn .= '<div class="error">Veuillez vérifier les informations du formulaire</div>';
                $formCandidature->populate($data);
            }
        }
    
        // Set Metas
    	//--------------------------
    	$modelMetas = new Model_DbTable_Metas();
    	$modelMetas->setMetas('Candidature spontanée');
    }
    
    public function postulerAction()
    {
        // Get params
        // --------------------------
        $params = $this->_request->getParams();
    
        if($params['id'] === NULL){
            throw new Zend_Controller_Action_Exception('Page non trouvée', 404);
        }
    
        // Get all jobs
        // --------------------------
        $model = new Model_DbTable_Emplois();
        $job = $model->getEmploi($params['id']);
    
        if($job === NULL || empty($job)){
            throw new Zend_Controller_Action_Exception('Page non trouvée', 404);
        }
    
        $this->view->job = $job;
    
        // Create form
        // --------------------------
        $formPostuler = new Form_Postuler();
        $this->view->form = $formPostuler;
    
        // Validate form
        // --------------------------
        if ($this->_request->isPost()) {
            $data = $this->_request->getPost();
    
            // Form is correct
            // ------------------------
            if ($formPostuler->isValid($data)) {
    
                // Rename the file uploaded
                // ----------------------
                $fileInfos = $formPostuler->cv->getFileInfo();
                $originFileName = $fileInfos['cv']['name'];
                list ($fileName, $ext) = $this->view->getFileExtension($originFileName);
                $newFileName = $fileName . '-' . time() . $ext;
                $formPostuler->cv->addFilter('Rename', $newFileName);
                
                $fileInfos = $formPostuler->lettreMotivation->getFileInfo();
                $originLMName = $fileInfos['lettreMotivation']['name'];
                list ($fileLMName, $ext) = $this->view->getFileExtension($originLMName);
                $newFileLMName = $fileLMName . '-' . (time() + 1) . $ext;
                $formPostuler->lettreMotivation->addFilter('Rename', $newFileLMName);
                 
                if ($formPostuler->cv->receive() && $formPostuler->lettreMotivation->receive()) {
                    	
                    // Build mail
                    // --------------------
                    $mail = new Zend_Mail('utf-8');
                    $mail->setBodyText(
                            'Nom, prénom : ' . $data['nom'] .
                            '\nEmail : ' . $data['email'] .
                            '\nTéléphone : ' . $data['tel'] .
                            '\nMessage :\n' . $data['message'],
                            '\nIP : ' . $_SERVER['REMOTE_ADDR']);
                    $mail->setBodyHtml(
                            '<strong>Nom, prénom</strong> : ' . $data['nom'] .
                            '<br /><strong>Email</strong> : ' .$data['email'] .
                            '<br /><strong>Téléphone</strong> : ' . $data['tel'] .
                            '<br /><strong>Message</strong> :<br />' . nl2br($data['message']).
                            '<br /><strong>IP</strong> : ' .$_SERVER['REMOTE_ADDR']);
                    	
                    // Attachment
                    // --------------------
                    $attachment = $mail->createAttachment(file_get_contents($formPostuler->cv->getFileName()));
                    $attachment->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
                    $attachment->filename = $newFileName;
                    
                    $attachment = $mail->createAttachment(file_get_contents($formPostuler->lettreMotivation->getFileName()));
                    $attachment->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
                    $attachment->filename = $newFileLMName;
                    	
                    $mail->setFrom($data['email'], $data['nom'])
                         ->addTo('rlalaux@milleetunecommunications.fr')
                        ->addBcc('jsmaurage@milleetunefenetres.fr')
                        //->addBcc('jcouadier@milleetunefenetres.fr')
                        ->setReplyTo($data['email'])
                        ->setSubject('Nouvelle canditature au poste de '.$job['titre']);
                    try {
                        // Send mail
                        // --------------------
                        $mail->send();
                        $this->view->placeHolderReturn .= '<div class="success">Votre message a bien été envoyé et sera traité dans les plus brefs délais</div>';
                        $formPostuler->reset();
    
                        // Unlink file uploaded
                        // --------------------
                        unlink('./docs/' . $newFileName);
                        unlink('./docs/' . $newFileLMName);
    
                    } catch (Zend_Mail_Exception $e) {
                        $this->view->placeHolderReturn .= '<div class="error">Une erreur s\'est produite lors de l\'envoi du message.<br />Veuillez réessayer ultérieurement</div>';
                    }
                } else {
                    $this->view->placeHolderReturn .= '<div class="error">Une erreur s\'est produite lord de l\'envoi de votre cv.<br />Veuillez réessayer ultérieurement.</div>';
                    $formPostuler->populate($data);
                }
            } else {
                $this->view->placeHolderReturn .= '<div class="error">Veuillez vérifier les informations du formulaire</div>';
                $formPostuler->populate($data);
            }
        }
    
        // Define metas
        // --------------------------
        // Set Metas
    	//--------------------------
    	$modelMetas = new Model_DbTable_Metas();
    	$modelMetas->setMetas('Postuler');
    }
}

