<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller {

    /**
     * @Route("/Category")
     */
    public function CategoryAction() {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        $categories = $repository->findAll();

        return $this->render('AppBundle:Category:category.html.twig', array(
                    'categories' => $categories
        ));
    }

    /**
     * @Route("/CategoryNew")
     */
    public function CategoryNewAction(Request $request) {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('app_category_category');
        }


        return $this->render('AppBundle:Category:category_new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/CategoryEdit/{id}")
     */
    public function CategoryEditAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');

        $category = $repository->find($id);
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('app_category_category');
        }

        return $this->render('AppBundle:Category:category_edit.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/CategoryDelete/{id}")
     */
    public function CategoryDeleteAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');

        $category = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        return $this->redirectToRoute('app_category_category');
    }

}
