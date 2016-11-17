<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\Tag2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tag2 controller.
 *
 * @Route("tag2")
 */
class Tag2Controller extends Controller
{
    /**
     * Lists all tag2 entities.
     *
     * @Route("/", name="tag2_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tag2s = $em->getRepository('FrontBundle:Tag2')->findAll();

        return $this->render('tag2/index.html.twig', array(
            'tag2s' => $tag2s,
        ));
    }

    /**
     * Creates a new tag2 entity.
     *
     * @Route("/new", name="tag2_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tag2 = new Tag2();
        $form = $this->createForm('FrontBundle\Form\Tag2Type', $tag2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag2);
            $em->flush($tag2);

            return $this->redirectToRoute('tag2_show', array('id' => $tag2->getId()));
        }

        return $this->render('tag2/new.html.twig', array(
            'tag2' => $tag2,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tag2 entity.
     *
     * @Route("/{id}", name="tag2_show")
     * @Method("GET")
     */
    public function showAction(Tag2 $tag2)
    {
        $deleteForm = $this->createDeleteForm($tag2);

        return $this->render('tag2/show.html.twig', array(
            'tag2' => $tag2,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tag2 entity.
     *
     * @Route("/{id}/edit", name="tag2_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tag2 $tag2)
    {
        $deleteForm = $this->createDeleteForm($tag2);
        $editForm = $this->createForm('FrontBundle\Form\Tag2Type', $tag2);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tag2_edit', array('id' => $tag2->getId()));
        }

        return $this->render('tag2/edit.html.twig', array(
            'tag2' => $tag2,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tag2 entity.
     *
     * @Route("/{id}", name="tag2_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tag2 $tag2)
    {
        $form = $this->createDeleteForm($tag2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tag2);
            $em->flush($tag2);
        }

        return $this->redirectToRoute('tag2_index');
    }

    /**
     * Creates a form to delete a tag2 entity.
     *
     * @param Tag2 $tag2 The tag2 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tag2 $tag2)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag2_delete', array('id' => $tag2->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
