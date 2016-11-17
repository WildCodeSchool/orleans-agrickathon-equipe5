<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\Tag1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tag1 controller.
 *
 * @Route("tag1")
 */
class Tag1Controller extends Controller
{
    /**
     * Lists all tag1 entities.
     *
     * @Route("/", name="tag1_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tag1s = $em->getRepository('FrontBundle:Tag1')->findAll();

        return $this->render('tag1/index.html.twig', array(
            'tag1s' => $tag1s,
        ));
    }

    /**
     * Creates a new tag1 entity.
     *
     * @Route("/new", name="tag1_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tag1 = new Tag1();
        $form = $this->createForm('FrontBundle\Form\Tag1Type', $tag1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag1);
            $em->flush($tag1);

            return $this->redirectToRoute('tag1_show', array('id' => $tag1->getId()));
        }

        return $this->render('tag1/new.html.twig', array(
            'tag1' => $tag1,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tag1 entity.
     *
     * @Route("/{id}", name="tag1_show")
     * @Method("GET")
     */
    public function showAction(Tag1 $tag1)
    {
        $deleteForm = $this->createDeleteForm($tag1);

        return $this->render('tag1/show.html.twig', array(
            'tag1' => $tag1,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tag1 entity.
     *
     * @Route("/{id}/edit", name="tag1_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tag1 $tag1)
    {
        $deleteForm = $this->createDeleteForm($tag1);
        $editForm = $this->createForm('FrontBundle\Form\Tag1Type', $tag1);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tag1_edit', array('id' => $tag1->getId()));
        }

        return $this->render('tag1/edit.html.twig', array(
            'tag1' => $tag1,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tag1 entity.
     *
     * @Route("/{id}", name="tag1_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tag1 $tag1)
    {
        $form = $this->createDeleteForm($tag1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tag1);
            $em->flush($tag1);
        }

        return $this->redirectToRoute('tag1_index');
    }

    /**
     * Creates a form to delete a tag1 entity.
     *
     * @param Tag1 $tag1 The tag1 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tag1 $tag1)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag1_delete', array('id' => $tag1->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
