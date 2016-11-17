<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\Startup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Startup controller.
 *
 * @Route("startup")
 */
class StartupController extends Controller
{
    /**
     * Lists all startup entities.
     *
     * @Route("/", name="startup_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $startups = $em->getRepository('FrontBundle:Startup')->findAll();

        return $this->render('startup/index.html.twig', array(
            'startups' => $startups,
        ));
    }

    /**
     * Creates a new startup entity.
     *
     * @Route("/new", name="startup_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $startup = new Startup();
        $form = $this->createForm('FrontBundle\Form\StartupType', $startup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($startup);
            $em->flush($startup);

            return $this->redirectToRoute('startup_show', array('id' => $startup->getId()));
        }

        return $this->render('startup/new.html.twig', array(
            'startup' => $startup,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a startup entity.
     *
     * @Route("/{id}", name="startup_show")
     * @Method("GET")
     */
    public function showAction(Startup $startup)
    {
        $deleteForm = $this->createDeleteForm($startup);

        return $this->render('startup/show.html.twig', array(
            'startup' => $startup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing startup entity.
     *
     * @Route("/{id}/edit", name="startup_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Startup $startup)
    {
        $deleteForm = $this->createDeleteForm($startup);
        $editForm = $this->createForm('FrontBundle\Form\StartupType', $startup);
        $editForm->handleRequest($request);

        /*if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();


        }*/
        return $this->redirectToRoute('Front', array('id' => $startup->getId()));

        return $this->render('startup/edit.html.twig', array(
            'startup' => $startup,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a startup entity.
     *
     * @Route("/{id}", name="startup_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Startup $startup)
    {
        $form = $this->createDeleteForm($startup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($startup);
            $em->flush($startup);
        }

        return $this->redirectToRoute('startup_index');
    }

    /**
     * Creates a form to delete a startup entity.
     *
     * @param Startup $startup The startup entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Startup $startup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('startup_delete', array('id' => $startup->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
