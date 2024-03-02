<?php

namespace Source\Controllers;
use Source\Core\Controller;
use Source\Support\Seo;


class Web extends Controller
{
    public function __construct()
    {
        parent::__construct( __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(): void
    {
        // $head = $this->seo->render(
        //     CONF_SITE_DESC,
        //     url(),
        //     theme("/assets/images/share.jpg")
        // );

        echo $this->view->render("home", [
            
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            // "head" => $head,
            // "video" => "lDZGl9Wdc7Y"
        ]);
    }

    /**
     * SITE BLOG
     * @param array|null $data
     */
    // public function blog(?array $data): void
    // {
    //     $head = $this->seo->render(
    //             "Blog - " . CONF_SITE_NAME,
    //             "Confira em nosso blog dicas e sacadas de como controlar melhorar suas contas. Vamos tomar um café?",
    //             url("/blog"),
    //             theme("/assets/images/share.jpg")
    //     );

    //     $pager = new Pager(url("/blog/page/"));
    //     $pager->pager(100, 10, ($data['page'] ?? 1));

    //     echo $this->view->render("blog", [
    //             "head" => $head,
    //             "paginator" => $pager->render()
    //     ]);
    // }
      
    /**
     * SITE BLOG POST
     * @param array $data
     */
    // public function blogPost(array $data): void
    // {
    //     $postName = $data['postName'];

    //     $head = $this->seo->render(
    //             "POST NAME - " . CONF_SITE_NAME,
    //             "POST HEADLINE",
    //             url("/blog/{$postName}"),
    //             theme("BLOG IMAGE")
    //     );

    //     echo $this->view->render("blog-post", [
    //             "head" => $head,
    //             "data" => $this->seo->data()
    //     ]);
    // }


    /**
     * SITE NAV ERROR
     * @param array $data
     */
    // public function error(array $data): void
    // {
    //     $error = new \stdClass();

    //     switch ($data['errcode']) {
    //         case "problemas":
    //             $error->code = "OPS";
    //             $error->title = "Estamos enfrentando problemas!";
    //             $error->message = "Parece que nosso serviço não está diponível no momento. Já estamos vendo isso mas caso precise, envie um e-mail :)";
    //             $error->linkTitle = "ENVIAR E-MAIL";
    //             $error->link = "mailto:" . CONF_MAIL_SUPPORT;
    //             break;

    //         case "manutencao":
    //             $error->code = "OPS";
    //             $error->title = "Desculpe. Estamos em manutenção!";
    //             $error->message = "Voltamos logo! Por hora estamos trabalhando para melhorar nosso conteúdo para você controlar melhor as suas contas :P";
    //             $error->linkTitle = null;
    //             $error->link = null;
    //             break;

    //         default:
    //             $error->code = $data['errcode'];
    //             $error->title = "Ooops. Conteúdo indispinível :/";
    //             $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/";
    //             $error->linkTitle = "Continue navegando!";
    //             $error->link = url_back();
    //             break;
    //     }

    //     $head = $this->seo->render(
    //         "{$error->code} | {$error->title}",
    //         $error->message,
    //         url("/ops/{$error->code}"),
    //         theme("/assets/images/share.jpg"),
    //         false
    //     );

    //     echo $this->view->render("error", [
    //         "head" => $head,
    //         "error" => $error
    //     ]);
    // }

    public function error(array $data): void 
    {
          echo "<h1>Error</h1>";
          echo $this->view->render("error", [
                "title" => "{$data['errcode']} | Oooops!"
          ]);
    }
}