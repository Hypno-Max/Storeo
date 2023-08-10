<?php 
/* Template Name: faq */
get_header(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
  <body class="page-faq">
  <div class="faq">>
    <div class="container">
      <div class="row">
        <div class="faq-wrapper">
          
          <div class="faq-inner">
            <div class="faq-item">
              <h3>
              Comment fonctionne le processus d'échange de jeux sur Storeo ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              Le processus d'échange sur Storeo est simple. Une fois que vous avez trouvé un jeu que vous souhaitez échanger, vous pouvez contacter le propriétaire du jeu pour proposer votre propre jeu en échange. Si l'autre utilisateur accepte, vous pouvez finaliser les détails de l'échange tels que l'expédition ou la remise en mains propres.
              </div>
            </div>

            <div class="faq-item">
              <h3>
              Est-ce que je peux échanger des jeux de toutes les plateformes ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              Oui ! Storeo permet l'échange de jeux pour une grande variété de plateformes, y compris les consoles rétro (comme NES, SNES, PlayStation 1, etc.), les consoles actuelles (PlayStation 4, Xbox One, Nintendo Switch, etc.) et les jeux pour PC. Vous pouvez trouver des jeux pour différentes plateformes dans notre catalogue.
              </div>
            </div>

            <div class="faq-item">
              <h3>
              Comment puis-je ajouter mes propres jeux à la liste des jeux disponibles pour l'échange ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              Pour ajouter vos jeux à la liste des jeux disponibles, connectez-vous à votre compte sur Storeo, accédez à votre profil utilisateur et recherchez l'option "Ajouter un jeu". Vous pourrez saisir les informations du jeu, telles que le titre, la plateforme, la description et des images. Une fois ajouté, d'autres utilisateurs pourront voir votre jeu et vous contacter pour proposer un échange.
              </div>
            </div>
            
            <div class="faq-item">
              <h3>
              Quelle est la politique de garantie et de retour sur les jeux échangés ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              Les garanties et les retours sont traités directement entre les utilisateurs impliqués dans l'échange. Storeo ne peut pas garantir la qualité ou l'état des jeux échangés. Nous encourageons les utilisateurs à communiquer ouvertement et à poser des questions sur l'état du jeu avant de finaliser l'échange. Si des problèmes surviennent, nous encourageons les utilisateurs à trouver une solution mutuellement satisfaisante.
              </div>
            </div>
            
            <div class="faq-item">
              <h3>
              Comment puis-je contacter le support client de Storeo en cas de problème ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              Si vous avez des questions ou rencontrez des problèmes, notre équipe du support client est là pour vous aider. Vous pouvez nous contacter en remplissant le formulaire de contact disponible sur notre site ou en appelant notre service client au [numéro de téléphone] pendant nos heures d'ouverture. Nous nous efforcerons de vous répondre dans les plus brefs délais.
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
    </script>
    <hr>
  </body>
</html>
<?php get_footer(); ?>


