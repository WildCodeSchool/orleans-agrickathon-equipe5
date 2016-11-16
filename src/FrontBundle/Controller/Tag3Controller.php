<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\Tag3;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tag3 controller.
 *
 * @Route("tag3")
 */
class Tag3Controller extends Controller
{
    /**
     * Lists all tag3 entities.
     *
     * @Route("/", name="tag3_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tag3s = $em->getRepository('FrontBundle:Tag3')->findAll();

        return $this->render('tag3/index.html.twig', array(
            'tag3s' => $tag3s,
        ));
    }

    /**
     * Creates a new tag3 entity.
     *
     * @Route("/new", name="tag3_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tag3 = new Tag3();
        $form = $this->createForm('FrontBundle\Form\Tag3Type', $tag3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag3);
            $em->flush($tag3);

            return $this->redirectToRoute('tag3_show', array('id' => $tag3->getId()));
        }

        return $this->render('tag3/new.html.twig', array(
            'tag3' => $tag3,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tag3 entity.
     *
     * @Route("/{id}", name="tag3_show")
     * @Method("GET")
     */
    public function showAction(Tag3 $tag3)
    {
        $deleteForm = $this->createDeleteForm($tag3);

        return $this->render('tag3/show.html.twig', array(
            'tag3' => $tag3,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tag3 entity.
     *
     * @Route("/{id}/edit", name="tag3_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tag3 $tag3)
    {
        $deleteForm = $this->createDeleteForm($tag3);
        $editForm = $this->createForm('FrontBundle\Form\Tag3Type', $tag3);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tag3_edit', array('id' => $tag3->getId()));
        }

        return $this->render('tag3/edit.html.twig', array(
            'tag3' => $tag3,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tag3 entity.
     *
     * @Route("/{id}", name="tag3_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tag3 $tag3)
    {
        $form = $this->createDeleteForm($tag3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tag3);
            $em->flush($tag3);
        }

        return $this->redirectToRoute('tag3_index');
    }

    /**
     * Creates a form to delete a tag3 entity.
     *
     * @param Tag3 $tag3 The tag3 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tag3 $tag3)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag3_delete', array('id' => $tag3->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
