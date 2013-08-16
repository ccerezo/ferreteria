<?php

namespace ferreteria\ZambranoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ferreteria\ZambranoBundle\Entity\Ventas;
use ferreteria\ZambranoBundle\Form\VentasType;

/**
 * Ventas controller.
 *
 * @Route("/inicio/ventas")
 */
class VentasController extends Controller
{
    /**
     * Lists all Ventas entities.
     *
     * @Route("/", name="ventas")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ferreteriaZambranoBundle:Ventas')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Ventas entity.
     *
     * @Route("/", name="ventas_create")
     * @Method("POST")
     * @Template("ferreteriaZambranoBundle:Ventas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Ventas();
        $form = $this->createForm(new VentasType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ventas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Ventas entity.
     *
     * @Route("/new", name="ventas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ventas();
        $form   = $this->createForm(new VentasType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ventas entity.
     *
     * @Route("/{id}", name="ventas_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ferreteriaZambranoBundle:Ventas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ventas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ventas entity.
     *
     * @Route("/{id}/edit", name="ventas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ferreteriaZambranoBundle:Ventas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ventas entity.');
        }

        $editForm = $this->createForm(new VentasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Ventas entity.
     *
     * @Route("/{id}", name="ventas_update")
     * @Method("PUT")
     * @Template("ferreteriaZambranoBundle:Ventas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ferreteriaZambranoBundle:Ventas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ventas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new VentasType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ventas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Ventas entity.
     *
     * @Route("/{id}", name="ventas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ferreteriaZambranoBundle:Ventas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ventas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ventas'));
    }

    /**
     * Creates a form to delete a Ventas entity by id.
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
