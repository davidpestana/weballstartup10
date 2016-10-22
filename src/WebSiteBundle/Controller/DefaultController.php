<?php

namespace WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Hip\MandrillBundle\Message;
use Hip\MandrillBundle\Dispatcher;

use WebSiteBundle\Entity\Lead;
use WebSiteBundle\Form\LeadType;


use WebSiteBundle\Entity\LeadRecruiter;
use WebSiteBundle\Form\LeadRecruiterType;

use WebSiteBundle\Entity\Contact;
use WebSiteBundle\Form\ContactType;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('WebSiteBundle:Default:index.html.twig');
    }

    private function sendEmailAction($templateName,$email,$name)
    {
        return true;
      $dispatcher = $this->get('hip_mandrill.dispatcher');
      $message = new Message();
      $message
        ->addTo($email,$name)
        ->addGlobalMergeVar('user_name',$name)
      ;
      $templateContent = [];
      $async = true;
      return $dispatcher->send($message, $templateName, $templateContent, $async);
    }



    /**
     * @Route("/recruiters")
     */
    public function RecruitersAction()
    {
        return $this->render('WebSiteBundle:Default:recruiters.html.twig');
    }





    /**
     * @Route("/leadrecruiter")
     * _Method("POST")
     */
    public function LeadRecruiterAction(Request $request)
    {
      $lead = new LeadRecruiter();
      $form = $this->createForm(LeadRecruiterType::class, $lead,['action' => $this->generateUrl('website_default_leadrecruiter')]);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
               $entity = $form->getData();
               $em = $this->getDoctrine()->getManager();
               $em->persist($entity);
               $em->flush();
               $template = 'thankyou-for-lead-recruiter-es';
               $this->sendEmailAction($template,$entity->getEmail(),$entity->getName());
              $response = new JsonResponse();
              $response->setData($entity);
          }else{
              $response = $this->render('WebSiteBundle:Forms:lead.form.html.twig',["form" => $form->createView()]);
          }


      return $response;
    }


    /**
     * @Route("/lead")
     * @Method("POST")
     */
    public function LeadAction(Request $request)
    {

      $lead = new Lead();
      $form = $this->createForm(LeadType::class, $lead,['action' => $this->generateUrl('website_default_lead')]);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
               $entity = $form->getData();
               $em = $this->getDoctrine()->getManager();
               $em->persist($entity);
               $em->flush();
               if($entity->getTypo() == 'carrier') $template = 'thankyou-for-lead-es';
               else $template = 'thankyou-for-lead-shipper-es';
               $this->sendEmailAction($template,$entity->getEmail(),$entity->getName());
                $response = new JsonResponse();
                $response->setData($entity);
          }else{
              $response = $this->render('WebSiteBundle:Forms:lead.form.html.twig',["form" => $form->createView()]);
          }


      return $response;
    }

    /**
     * @Route("/contact")
     * @Method("POST")
     */
    public function ContactAction(Request $request)
    {
      //@TODO la proteccion html5 no va bien, y falta dar de alta el tema
      $entity = new Contact();
      $form = $this->createForm(ContactType::class, $entity,['action' => $this->generateUrl('website_default_contact')]);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
         $response = new JsonResponse();
         $entity = $form->getData();
         $em = $this->getDoctrine()->getManager();
         $em->persist($entity);
         $em->flush();
         $response->setData($entity);
         $this->sendEmailAction('thankyou-for-contact-es',$entity->getEmail(),$entity->getName());
      }else{
        $response = $this->render('WebSiteBundle:Forms:footer.form.html.twig',["form" => $form->createView()]);
      }
      return $response;
    }
}
