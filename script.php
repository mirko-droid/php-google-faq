<?php
/* Riscrivere questa pagina del sito google
https://policies.google.com/faq. 
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. */
$db = [
    [
        'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'risposta' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.<br><br>
        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br><br>
        Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.<br><br>
        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br><br>
        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.',
    ],
    [
        'domanda' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'risposta' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.<br><br>
        Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.<br><br>        
        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.<br><br>        
        Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.',
    ] 
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
        max-width: 100%;
    }
    nav{
        width: 95%;
        padding-top: 20px;
        margin: 0 auto;
    }
    header{
        width: 100%;
        border-bottom: 1px solid lightgrey;
    }
    .container{
        width: 80%;
        margin: 0 auto;
    }
    h2{
        margin: 30px 0;
    }
    h3{
        color: #5f6368;
    }
   
    .option_account .icon{
        color: #5f6368;
        padding-top: 5px;
    }
    .option_account .account{
        color: white;
        background: #01579b;
        border-radius: 1rem;
        padding: 3px 5px 0px 5px;
    }
    .nav-bar{
        margin-top: 10px;
    }
    li{
        list-style: none;
        margin-right: 2rem;
    }
    li a{
      text-decoration: none;
      color: #5f6368;
    }
    .active{
        padding-bottom: 2px;
        border-bottom: 2px solid #01579b;
    }
    /* UTILITY CLASS */
    .d-flex{
        display: flex;
    }
    .just_cont_sp_bt{
        justify-content: space-between;
    }
    .prl_20{
        padding: 0 20px;
    }
</style>

<body>
    <header>
        <nav>
            <div class="nav-header d-flex just_cont_sp_bt">
                <div class="logo d-flex">
                    <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo">
                    <h3>Privacy e termini</h3>
                </div>
                <div class="option_account d-flex ">
                    <div class="icon prl_20">
                        <i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="account">M</div>
                </div>
            </div>
            <div class="nav-bar">
                <ul class='d-flex'>
                    <li><a href="#">Introduzione</a></li>
                    <li><a href="#">Norme sulla privacy</a></li>
                    <li><a href="#">Termini di servizio</a></li>
                    <li><a href="#">Tecnologie</a></li>
                    <li class='active'><a href="#">Domande frequenti</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <?php foreach ($db as $value) { ;?>
            <h2>
                <?php echo($value['domanda'])  ;?>
            </h2>
            <p>
                <?php echo ($value['risposta']) ;?>
            </p>
        <?php } ?>

    </div>


    
</body>
</html>