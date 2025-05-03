<?php

class HomeController extends Controller 
{

    private $user;

    public function __construct()
    {
        parent::__construct();

        $this->user = new User();

        if (! $this->user->checkLogin()) {
            header('Location: '.BASE_URL.'login');
            exit;
        }
        
        /*$data = array();

        $data['menu'] = array(
            array(
                'class' => 'link-home',
                'id' => '',
                'link' => BASE_URL,
                'text' => 'Início'
            ),
            array(
                'class' => '',
                'id' => '',
                'link' => BASE_URL.'produto',
                'text' => 'Configurações'
            ),
            array(
                'class' => '',
                'id' => '',
                'link' => BASE_URL.'categoria',
                'text' => 'Usuários'
            ),
            array(
                'class' => '',
                'id' => '',
                'link' => BASE_URL . 'login/sair',
                'text' => 'Sair'
            )
        );*/

        $this->loadView('template_parts/header', $this->data);
    }

    public function index() 
    {



        $p = new Product();

        $s = '';

        if (! empty($_GET['busca'])) {

            $s = trim($_GET['busca']);

        }

        $this->data['list'] = $p->getProducts($s);

        $this->loadView('home', $this->data);
    }

    public function add()
    {

        $p = new Product();

        if (! empty($_POST['cod'])) {

            $cod         = $_POST['cod'];
            $name        = $_POST['name'];
            $price       = $_POST['price'];
            $quantity    = $_POST['quantity'];
            $minQuantity = $_POST['min_quantity'];

            $p->addProduct($cod, $name, $price, $quantity, $minQuantity);

            header('Location: '.BASE_URL);
            exit;
        }

        $this->loadView('add', $this->data);
    }

    public function edit($id)
    {
        $this->data = array('info' => '');

        $p = new Product();

        if (! empty($_POST['cod'])) {

            $cod         = $_POST['cod'];
            $name        = $_POST['name'];
            $price       = $_POST['price'];
            $quantity    = $_POST['quantity'];
            $minQuantity = $_POST['min_quantity'];

            $p->editProduct($cod, $name, $price, $quantity, $minQuantity, $id);
            header('Location: '.BASE_URL);
        }

        $data['info'] = $p->getProduct($id);

        $this->loadView('edit', $this->data);
    }

    public function __destruct()
    {
        $this->loadView('template_parts/footer');
    }

}
