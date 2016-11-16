<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\Facilitateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Facilitateur controller.
 *
 * @Route("facilitateur")
 */
class FacilitateurController extends Controller
{
    /**
     * Lists all facilitateur entities.
     *
     * @Route("/", name="facilitateur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $facilitateurs = $em->getRepository('FrontBundle:Facilitateur')->findAll();

        return $this->render('facilitateur/index.html.twig', array(
            'facilitateurs' => $facilitateurs,
        ));
    }

    /**
     * Creates a new facilitateur entity.
     *
     * @Route("/new", name="facilitateur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $facilitateur = new Facilitateur();
        $form = $this->createForm('FrontBundle\Form\FacilitateurType', $facilitateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facilitateur);
            $em->flush($facilitateur);

            return $this->redirectToRoute('facilitateur_show', array('id' => $facilitateur->getId()));
        }

        return $this->render('facilitateur/new.html.twig', array(
            'facilitateur' => $facilitateur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a facilitateur entity.
     *
     * @Route("/{id}", name="facilitateur_show")
     * @Method("GET")
     */
    public function showAction(Facilitateur $facilitateur)
    {
        $deleteForm = $this->createDeleteForm($facilitateur);

        return $this->render('facilitateur/show.html.twig', array(
            'facilitateur' => $facilitateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing facilitateur entity.
     *
     * @Route("/{id}/edit", name="facilitateur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Facilitateur $facilitateur)
    {
        $deleteForm = $this->createDeleteForm($facilitateur);
        $editForm = $this->createForm('FrontBundle\Form\FacilitateurType', $facilitateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facilitateur_edit', array('id' => $facilitateur->getId()));
        }

        return $this->render('facilitateur/edit.html.twig', array(
            'facilitateur' => $facilitateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a facilitateur entity.
     *
     * @Route("/{id}", name="facilitateur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Facilitateur $facilitateur)
    {
        $form = $this->createDeleteForm($facilitateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facilitateur);
            $em->flush($facilitateur);
        }

        return $this->redirectToRoute('facilitateur_index');
    }

    /**
     * Creates a form to delete a facilitateur entity.
     *
     * @param Facilitateur $facilitateur The facilitateur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Facilitateur $facilitateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facilitateur_delete', array('id' => $facilitateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
