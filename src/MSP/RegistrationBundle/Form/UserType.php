<?php

namespace MSP\RegistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName','text',array( 
            'label'  => 'First Name',
            'attr'   =>  array(
                'placeholder' => "enter your first name")
            ))
                
            ->add('lastName','text',array( 
            'label'  => 'Last Name',
            'attr'   =>  array(
                'placeholder' => "enter your last name")
            ))
            ->add('indexNumber','text',array( 
            'label'  => 'Index Number',
            'attr'   =>  array(
                'placeholder' => "enter your Index Number")
            ))
            ->add('email','text',array( 
            'label'  => 'Email',
            'attr'   =>  array(
                'placeholder' => "enter your email")
            ))
            ->add('department','choice',array(
            'choices'   =>  array('IT'=>'IT','archi'=>'Architechture','cse'=>'Computer Science','civil'=>'Civil','chemical'=>'Chemical','electronic'=>'Electronic','electrical'=>'Electrical','material'=>'Material','mechanical'=>'Mechanical','em'=>'Earth Resource','tm'=>'Textile','tlm'=>'TLM')
            ))
            ->add('phoneNumber','text',array(
                'label' => 'Contact Number',
                'attr'  => array(
                    'placeholder' => '**********'
                )
            ))
            ->add('pillar','choice',array(
            'choices'   =>  array('HR'=>'Human Resource','marketing'=>'Marketing','IR'=>'Institutional Relation','creative'=>'Creative Development','specialProjects'=>'Special Projects','newsoperation'=>'News OPerations','web'=>'Web and Technology','editorial'=>'Editorial','financial'=>'Financial',)
            ))
            ->add('address')
            ->add('facebookUsername')
            ->add('skypeUserName')
            ->add('SignUp','submit')
               
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MSP\RegistrationBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'msp_registrationbundle_user';
    }
}
