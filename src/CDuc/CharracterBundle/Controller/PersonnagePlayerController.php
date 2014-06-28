<?php

namespace CDuc\CharracterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CDuc\CharracterBundle\Entity\Personnage;
use CDuc\CharracterBundle\Entity\PersonnageHasSkill;
use CDuc\CharracterBundle\Form\PersonnagePlayerType;


/**
 * Personnage controller.
 *
 * @Route("/personnages")
 */
class PersonnagePlayerController extends Controller
{

    /**
     * Creates a new Personnage entity.
     *
     * @Route("/", name="personnage_player_create")
     * @Method("POST")
     * @Template("CDucCharracterBundle:PersonnagePlayer:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $player = $user = $this->container->get('security.context')->getToken()->getUser();
        $entity = new Personnage();
        $entity->setCreatedat(new \Datetime());
        $entity->setJoueur($player);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            /* Special traitment : add all skill on 0 */
            $skills = $em->getRepository('CDucCharracterBundle:Skill')->findAll();
            foreach($skills as $skill)
            {
                $phs = new PersonnageHasSkill();
                $phs->setTimestamp(new \Datetime());
                $phs->setPersonnage($entity);
                $phs->setSkill($skill);
                $phs->setValue(0);
                $em->persist($phs);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('personnage_player_show', array('id' => $entity->getId())));
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
        $form = $this->createForm(new PersonnagePlayerType(), $entity, array(
            'action' => $this->generateUrl('personnage_player_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Personnage entity.
     *
     * @Route("/new", name="personnage_player_new")
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
     * @Route("/{id}", name="personnage_player_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CDucCharracterBundle:Personnage')->find($id);
        $skills = $em->getRepository('CDucCharracterBundle:PersonnageHasSkill')->findByPersonnage($entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personnage entity.');
        }


        return array(
            'entity'      => $entity,
            'skills'      => $skills,
        );
    }

    /**
     * Displays a form to edit an existing Personnage entity.
     *
     * @Route("/{id}/edit", name="personnage_player_edit")
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

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
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
        $form = $this->createForm(new PersonnagePlayerType(), $entity, array(
            'action' => $this->generateUrl('personnage_player_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Personnage entity.
     *
     * @Route("/{id}", name="personnage_player_update")
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

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('personnage_player_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
}
