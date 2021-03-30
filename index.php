<?php
require('autoload.php');

$metaCharset = new Meta("UTF-8");
$metaHttEquiv = new Meta(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Meta(null, "viewport", null, "width=device-width, initial-scale=1.0");

/*Login*/
$title = new Title('Login');
$conn = new Conexao();
/*Login - Fim*/

/*Head*/
$linkBootstrap = new LinkCss("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css","stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl","anonymous");
$head = new Head();
$head->addElement($metaCharset);
$head->addElement($metaHttEquiv);
$head->addElement($metaName);
$head->addElement($linkBootstrap);
$head->addElement($title);
/*Head - Fim*/

/*Body*/
$body = new Body("body");
$container = new Div("container");
$barra = new Div("row");
$conteudoBarra = new Div("col bg-primary");
$texto = new Texto("olá mundo");
$conteudoBarra->addElement($texto);
$barra->addElement($conteudoBarra);
$areaprincipal = new Div("row");
$menu = new Div("col-sm-2");
//itens do menu
$menuConteudo = new Ul("list-group");
$menuConteudo->addUl(new li("list-group-item", "Pessoas"));
$menuConteudo->addUl(new li("list-group-item", "Produtos"));
$menuConteudo->addUl(new li("list-group-item", "Contas"));
$menuConteudo->addUl(new li("list-group-item", "Créditos"));
$menu->addElement($menuConteudo);
$miolo = new Div("col-sm-10 bg-danger");
$miolo->addElement($texto);
$areaprincipal->addElement($menu);
$areaprincipal->addElement($miolo);
$container->addElement($barra);
$container->addElement($areaprincipal);
$body->addElementBody($container);
/*Body - Fim*/

/*Form - email*/
$div_formRow_email   = new Div('form-row mx-3 my-2');
$div_formGroup_email = new Div('form-group');
$label_email = new Label('Input Label', 'inputEmail');
$input_email = new Input('form-control', [
    'id'   => 'inputEmail',
    'name' => 'inputEmail',
    'type' => 'email',
    'placeholder' => 'name@example.com',
]);
$div_formGroup_email->addElement($label_email);
$div_formGroup_email->addElement($input_email);
$div_formRow_email->addElement($div_formGroup_email);
$html = new Html("pt-br", $head, $body);
/*Form - Fim email*/

/*Form - Senha*/
$div_formRow_password   = new Div('form-row mx-3 my-2');
$div_formGroup_password   = new Div('form-group');
$label_senha = new Label('Password', 'inputSenha');
$input_senha = new Input('form-control', [
    'id'   => 'inputSenha',
    'name' => 'inputSenha',
    'type' => 'password',
    'placeholder' => 'Password'
]);

$div_formGroup_password->addElement($label_senha);
$div_formGroup_password->addElement($input_senha);
$div_formRow_password->addElement($div_formGroup_password);
/*Form - Senha - Fim*/

/*Form Sign - in*/
$div_formRow_signin   = new Div('form-row mx-3 my-2');
$div_formGroup_signin = new Div('form-group');
$button_signin     = new Input('btn btn-primary', [
    'type'  => 'Submit',
    'Value' => 'Sign In'
]);
$div_formGroup_signin->addElement($button_signin);
$div_formRow_signin->addElement($div_formGroup_signin);
/*Form Sign - in - Fim*/

/*Form*/
$form    = new Form('POST', 'authentication.php');
$form->addElementForms($div_formRow_email);
$form->addElementForms($div_formRow_password);
$form->addElementForms($div_formRow_signin);

/*Form - Fim*/








echo $html;
