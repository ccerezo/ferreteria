<?php

namespace ferreteria\ZambranoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ferreteria\ZambranoBundle\Entity\Articulo;
use ferreteria\ZambranoBundle\Form\ArticuloType;

/**
 * Articulo controller.
 *
 * @Route("/articulo")
 */
class ArticuloController extends Controller
{
    /**
     * Lists all Articulo entities.
     *
     * @Route("/", name="articulo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ferreteriaZambranoBundle:Articulo')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Articulo entity.
     *
     * @Route("/", name="articulo_create")
     * @Method("POST")
     * @Template("ferreteriaZambranoBundle:Articulo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Articulo();
        $form = $this->createForm(new ArticuloType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articulo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Articulo entity.
     *
     * @Route("/new", name="articulo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Articulo();
        $form   = $this->createForm(new ArticuloType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Articulo entity.
     *
     * @Route("/{id}", name="articulo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ferreteriaZambranoBundle:Articulo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articulo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Articulo entity.
     *
     * @Route("/{id}/edit", name="articulo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ferreteriaZambranoBundle:Articulo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articulo entity.');
        }

        $editForm = $this->createForm(new ArticuloType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Articulo entity.
     *
     * @Route("/{id}", name="articulo_update")
     * @Method("PUT")
     * @Template("ferreteriaZambranoBundle:Articulo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ferreteriaZambranoBundle:Articulo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articulo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ArticuloType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articulo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Articulo entity.
     *
     * @Route("/{id}", name="articulo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ferreteriaZambranoBundle:Articulo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Articulo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('articulo'));
    }

    /**
     * Creates a form to delete a Articulo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
