<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class hubController extends Controller{
        /**
         * @Route("/")
         * @Method({"GET"})
         */
        public function index() {
           return $this->render('hub/index.html.twig');
        }

         /**
         * @Route("/contact")
         * @Method({"GET"})
         */
        public function contact() {
            return $this->render('hub/contact.html.twig');
         }

         /**
         * @Route("/service")
         * @Method({"GET"})
         */
        public function service() {
            return $this->render('hub/index.html.twig');
         }

    }