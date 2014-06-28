<?php

namespace CDuc\CharracterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CDuc\CharracterBundle\Entity\Personnage;
use CDuc\CharracterBundle\Form\PersonnageType;

/**
 * Personnage controller.
 *
 * @Route("/admin/personnage")
 */
class PersonnageController extends Controller
{

    /**
     * Lists all Personnage entities.
     *
     * @Route("/", name="personnage")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CDucCharracterBundle:Personnage')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Personnage entity.
     *
     * @Route("/", name="personnage_create")
     * @Method("POST")
     * @Template("CDucCharracterBundle:Personnage:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Personnage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('personnage_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Personnage entity.
    *
    * @param Personnage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Personnage $entity)
    {
        $form = $this->createForm(new PersonnageType(), $entity, array(
            'action' => $this->generateUrl('personnage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Personnage entity.
     *
     * @Route("/new", name="personnage_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Personnage();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Personnage entity.
     *
     * @Route("/{id}", name="personnage_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CDucCharracterBundle:Personnage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personnage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Personnage entity.
     *
     * @Route("/{id}/edit", name="personnage_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CDucCharracterBundle:Personnage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personnage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Personnage entity.
    *
    * @param Personnage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Personnage $entity)
    {
        $form = $this->createForm(new PersonnageType(), $entity, array(
            'action' => $this->generateUrl('personnage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Personnage entity.
     *
     * @Route("/{id}", name="personnage_update")
     * @Method("PUT")
     * @Template("CDucCharracterBundle:Personnage:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CDucCharracterBundle:Personnage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personnage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('personnage_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Personnage entity.
     *
     * @Route("/{id}", name="personnage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CDucCharracterBundle:Personnage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Personnage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('personnage'));
    }

    /**
     * Creates a form to delete a Personnage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personnage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
