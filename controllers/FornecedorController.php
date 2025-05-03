<?php 

class FornecedorController extends Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->user = new User();

        if (! $this->user->checkLogin()) {
            header('Location: '.BASE_URL.'login');
            exit;
        }
        
        $data = array();

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
            )
        );

        $this->loadView('template_parts/header', $data);
    }

    public function index()
    {
        $data = array();

        $m = new Fornecedor();

        $s = '';

        if (! empty($_GET['busca'])) {

            $s = addslashes(trim($_GET['busca']));

        }

        $data['list'] = $m->getFornecedores($s);

        $this->loadView('fornecedor', $data);
    }

    public function add()
    {
        $data = array();

        $f = new Fornecedor();

        $s = '';

        if (! empty($_GET['busca'])) {

            $s = addslashes(trim($_GET['busca']));

        }

        if (! empty($_POST['name'])) {
            $name = addslashes($_POST['name']);
            $url  = addslashes($_POST['url']);

            $f->addFornecedor($name, $url);

            header('Location: '.BASE_URL.'fornecedor');

            exit;

        }

        $data['list'] = $f->getFornecedores($s);

        $this->loadView('fornecedor-add', $data);
    }

    public function delete($id) 
    {
        $data = array();
        $f = new Fornecedor();

        if (! empty($_GET['busca'])) {

            $s = addslashes(trim($_GET['busca']));

        }

        $deuCerto = false;

        if (! empty($id)) {
            $deuCerto = $f->delete(addslashes($id));
        }

        if ($deuCerto) {
            $_SESSION['fornecedor_msg'] = 'Fornecedor Excluído com Sucesso!';
        } else {
            $_SESSION['fornecedor_msg'] = 'Falha ao excluir fornecedor!';
        }

        header('Location: '.BASE_URL.'fornecedor');

        exit;
    }

    public function __destruct()
    {
        $this->loadView('template_parts/footer');
    }
}
