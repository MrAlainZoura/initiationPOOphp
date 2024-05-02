<?php
   require_once('../vendor/autoload.php');

   /* 
   cmd/
   cd \
   cd xampp/htdocs/projet>
   php -S localhost:8000 -d display_errors=1 -t public/
      require_once('class/paypal/paiement.php');
      require_once('class/cart.php');
      
       $cart = new cart(0,100);
      // $cart->setTotalPrice(50);
       $cart->discount(10);
       //var_dump($cart->getTotalPrice());
       echo $cart->getTotalPrice();

       use \Class\paypal\paiement as PaiementPaypal;
       use \Class\strip\paiement;

       $paiementPaypal = new PaiementPaypal();
       $paiementStrip = new paiement();
       var_dump($paiementPaypal, $paiementStrip);

       use Class\enum\statut;
       On appelle enum Statut et case APPROVAL_PENDING
       if(Statut::APPROVAL_PENDING===$reservation->statut) echo'en attente';

       use Class\Reservation;
       use Class\preniumcoffeeMachine;
       use Class\coffeeMachine;
       $reservation= new Reservation();
       $reservation= new Reservation();
       $reservation= new Reservation();
       $reservation= new Reservation();
       var_dump(Reservation::getInstance());
       
       $espresso= new PreniumCoffeeMachine(3);
       $espresso->select('vanilla');
      

       use Class\pegeot;
       $pegeot= new Pegeot("pegeot");
       var_dump($pegeot->marque());

   

       use Class\PDFdownloadBasic;
       use Class\pdfDownloaderService;
       use Class\PDFdownloadPRENIUM;

       $pdfPrenium= new PDFdownloadPRENIUM();
       $BasicPDF= new PDFdownloadBasic();
       //var_dump($BasicPDF->downloaderPDF());

       $pdfDownloaderService = new PdfDownloaderService();
       var_dump($pdfDownloaderService->Pdfdownload($BasicPDF));
       var_dump($pdfDownloaderService->Pdfdownload($pdfPrenium));
   
       use Class\parentClass;
       use Class\childClass;

      $parent = new ParentClass();
      $child = new ChildClass();

      // var_dump($parent->getName(). $child->getName());
      //var_dump(ParentClass::getName(). ChildClass::getName());

       var_dump($parent->factoryInstance());
       var_dump($parent->factoryInstance());
       var_dump($parent->factoryInstance());
       var_dump($parent->factoryInstance());

       var_dump($child->factoryInstance());
       var_dump($child->factoryInstance());
       var_dump($child->factoryInstance());
       var_dump($child->factoryInstance());

       //fin late binding 
   
       use Class\CoffeMaker\espreso;
       use Class\CoffeMaker\iriche;
       use Class\CoffeMaker\multiCoffee;


       $esprso= new Espreso();
       $iriche = new Iriche();
       $multiCoffee= new   MultiCoffee();

       var_dump(
         $esprso->makeEspreso().
         $iriche->makeIriche().
         $multiCoffee->makeIriche().
         $multiCoffee->makeEspreso()
       );
       fin trait
   */
       use Class\ExceptionDir\login;
       use Class\ExceptionDir\user;
       use Class\ExceptionDir\Exception\userNotVerifiedException;
       use Class\ExceptionDir\Exception\userBaniException;

       $user= new User('alain', '1111');
       $login = new Login($user);

       try{
         $login->login();
       } catch (\Exception $e) {
         echo $e->getMessage() .' sur la ligne : '. $e->getLine() .' et dans le fichier : '. $e->getFile();
          
       }finally{
         echo '<p>Je suis toujours executé avec ou sans catch</p>';
       }

?>