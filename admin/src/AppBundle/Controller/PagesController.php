<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pages;
use AppBundle\Form\PagesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends Controller {

    /**
     * @Route("/Page")
     */
    public function PageAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Pages');
        $pages = $repository->findAll();

        return $this->render('AppBundle:pages:page.html.twig', array(
                    'pages' => $pages
        ));
    }

    /**
     * @Route("/PageNew")
     */
    public function PageNewAction(Request $request) {
        $page = new Pages();
        $form = $this->createForm(PagesType::class, $page);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $page = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('app_pages_page');
        }

        return $this->render('AppBundle:pages:page_new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/PagesTranslate")
     */
    public function PagesTranslateAction(Request $request) {
        $page = new Pages();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Pages');

        if ($request->request->get("pageId", null) !== null) {
            $page = clone $repository->find($request->request->get("pageId"));
            $page->setTranslof($request->request->get("pageId"));
        }

        $form = $this->createForm(PagesType::class, $page);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $page = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('app_pages_page');
        }

        return $this->render('AppBundle:Pages:page_new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/PagesCopy")
     */
    public function PagesCopyAction(Request $request) {
        $page = new Pages();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Pages');

        if ($request->request->get("pageId", null) !== null) {
            $page = clone $repository->find($request->request->get("pageId"));
        }

        $form = $this->createForm(PagesType::class, $page);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $page = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('app_pages_page');
        }

        return $this->render('AppBundle:Pages:page_new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/PageEdit/{id}")
     */
    public function PageEditAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Pages');

        $page = $repository->find($id);
        $form = $this->createForm(PagesType::class, $page);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $page = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('app_pages_page');
        }

        return $this->render('AppBundle:pages:page_edit.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/PageDelete/{id}")
     */
    public function PageDeleteAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Pages');

        $page = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($page);
        $em->flush();

        return $this->redirectToRoute('app_pages_page');
    }

}
