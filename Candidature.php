<?php
/**
 * 
 * @author Aurelien
 *
 */
class Form_Candidature extends Zend_Form
{
    public function init ()
    {
        $this->setName('contact')->setMethod('post')->setAttrib('enctype', 'multipart/form-data');
        
        $nom = new Zend_Form_Element_Text('nom');
        $nom->setLabel('Nom, prénom *')
            ->setRequired(true)
            ->addValidator('NotEmpty', true, 
                array(
                        'messages' => array(
                                'isEmpty' => 'Champ requis'
                        )
                ))
            ->addFilter('StripTags')
            ->addFilter('StringTrim');
        
        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Email *')
            ->setRequired(true)
            ->addValidator('EmailAddress')
            ->addErrorMessage('Adresse email non valide')
            ->addFilter('StripTags')
            ->addFilter('StringTrim');
        
        $tel = new Zend_Form_Element_Text('tel');
        $tel->setLabel('Téléphone *')
            ->setRequired(true)
            ->addValidator('NotEmpty', true, 
                array(
                        'messages' => array(
                                'isEmpty' => 'Champ requis'
                        )
                ))
            ->addValidator('Digits', true, 
                array(
                        'messages' => array(
                                'notDigits' => 'Ne peut contenir que des chiffres'
                        )
                ))
            ->addFilter('StripTags')
            ->addFilter('StringTrim');
        
        $cv = new Zend_Form_Element_File('cv');
        $cv->setLabel('Joindre CV (taille max 2Mo) *')
            ->setDestination('./docs')
            ->setRequired(true)
            ->addValidator('Extension', true, array('pdf', 'doc', 'docx', 'odt'))
            ->addValidator('Count', true, 1)
            ->addValidator('Size', true, '3MB');
        $cv->getValidator('Extension')->setMessage('Extension de fichier invalide. Extensions autorisées : .pdf, .doc, .docx, .odt');
        $cv->getValidator('Upload')->setMessage('Champ requis',Zend_Validate_File_Upload::NO_FILE);
        
        $lettreMotivation = new Zend_Form_Element_File('lettreMotivation');
        $lettreMotivation->setLabel('Votre lettre de motivation')
            ->setDestination('./docs')
           // ->setRequired(true)
            ->addValidator('Extension', true, array('pdf', 'doc', 'docx', 'odt'))
            ->addValidator('Count', true, 1)
            ->addValidator('Size', true, '3MB');
        $lettreMotivation->getValidator('Extension')->setMessage('Extension de fichier invalide. Extensions autorisées : .pdf, .doc, .docx, .odt');
       // $lettreMotivation->getValidator('Upload')->setMessage('Champ requis',Zend_Validate_File_Upload::NO_FILE);
        
        $msg = new Zend_Form_Element_Textarea('message');
        $msg->setLabel('Votre message')
            ->addFilter('StripTags')
            ->addFilter('StringTrim');
        
        $this->addElements(array(
        		$nom,
        		$tel,
        		$email,
        		$cv,
                $lettreMotivation,
        		$msg
        ));
        
        $this->setElementDecorators(
            array(
                    'ViewHelper',
                    'Errors',
                    array(
                            'Label'
                    )
            ));
        
        $cv->setDecorators(
                array('File',
                        'Errors',
                        array( 'Label')
                ));
        
        $lettreMotivation->setDecorators(
                array('File',
                        'Errors',
                        array( 'Label')
                ));
        
    }
}