@extends('nhelper::layourt.app')
@section('sider')
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
            <div class="page-intro single-col-max mx-auto">Sur cette page, vous trouverez tout ce que vous avez besoin de savoir sur {{env('APP_NAME')}}</div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100" action="{{ route('search') }}">

                    <input type="text"  id="searchInput" placeholder="Search the docs..." name="searchInput" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
                <div id="suggestion"></div>
            </div>
        </div>
    </div>
@endsection
@section('content')

<article class="docs-article" id="section-1">

        <section class="docs-section">
            <p>
                <h3>Commencer avec NFacture</h3>

                Vous venez de découvrir <b>NFacture</b> et vous désirez faire une inscription. Que vous soyez un <b>particulier</b> ou une <b>entreprise</b>, suivez tout simplement les étapes suivantes :<br><br>
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset(config('nhelper.inscriptionSociete')) }}"  width="100%" alt="">
                    </div>
                    <div class="col-6">
                           <h4 class=" text-center">Entreprise ou Particulier</h4>
                        <ol>
                            <li>Cliquez sur <b>Inscription</b> sur la page d’accueil <a href="nfacture.com">nfacture.com</a>  </li>
                            <li>Remplissez tous les champs du formulaire d’inscription</li>
                            <li>Après avoir lu les Conditions Générales de Vente et les Règles Générales de Protection des Données, cochez la case <em>« J’ai lu et accepté... »</em></li>
                            <li>Cliquez sur <b>S’enregistrer</b> pour soumettre votre inscription</li>
                        </ol>
                        <h5>Validation de compte</h5>
                        Après soumission du formulaire, vous recevrez un code de vérification à l’adresse mail renseignée lors de l’inscription (veillez donc à entrer une adresse mail valide et régulièrement utilisée)
                        <ol>
                            <li>Saississez le code de vérification reçu dans la fenêtre affichée à l’écran</li>
                            <li>Cliquez sur <b>SOUMETTRE</b></li>
                        </ol>
                        Votre compte est désormais valide, vous pouvez maintenant accéder à votre espace de travail en cliquant sur Mon espace sur la page d’accueil.
                    </div>
                </div>
            </p>
        </section><!--//docs-intro-->


    <section class="docs-section">
        <p>
            <h3>Importation de vos données d'article</h3>
            <img src="{{ asset(config('nhelper.importer')) }}" width="100%" height="20%" alt="importer"><br><br>
            <div class="row">
                <div class="col-6">
                    Vous pouvez procéder à l’importation de vos articles si vous disposez déjà d’un répertoire d’articles.
                    Pour effectuer l'importation des articles, le fichier à importer doit respecter le format Excel suivant et avoir pour extension .xlsx ou .csv .<br>
                    <em>‘Code’, ‘Nom’, ‘Taxe groupe’, ‘Taxe spécifique’, ‘Prix(fcfa)’</em> Exemple: <a href="{{ asset(config('nhelper.Articles'))}}" download="Article">Format Excel.</a>
                </div>
                <div class="col-6">
                    <img src=" {{ asset(config('nhelper.importation'))}} "  width="100%" alt="">
                </div>
            </div>
        </p>
    </section><!--//section-->
    <section class="docs-section">
        <p>
            <h3>Gestion d'Article</h3>
            <h5 style="margin-left: 5%;">Création</h5>
            <div class="row">
                <div class="col-6">
                    <ol>
                        <li>Cliquez sur <b>Article</b>  dans le menu  puis sur <b>nouveau</b>.</li>
                        <li>Saisissez les informations de chaque champs.puis importez au besoin une photo de l’article</li>
                        <li>Cliquez sur <b>Sauvegarder</b> pour enregistrer l’article.</li>
                    </ol>
                </div>
                <div class="col-6">
                    <img src=" {{ asset(config('nhelper.creationP'))}}" width="100%" height="100%" alt="">
                </div>
            </div><br><br>
            <h5 style="margin-left: 50%;" class="text-right">Modification et Suppression</h5>

            <div class="row">
                <div class="col-6">
                    <img src=" {{ asset(config('nhelper.tablearticle'))}}" height="50%" width="100%" alt="">
                </div>
                <div class="col-6">
                    <ol>
                        <li>Accédez à la liste des articles en cliquant sur <b>Articles</b> dans le menu de navigation </li>
                        <li>Cliquez sur le bouton <img src=" {{ asset(config('nhelper.modif'))}} " alt="">  pour modifier les informations.</li>
                        <li>Cliquez sur le bouton <img src="{{ asset(config('nhelper.info'))}}" alt=""> pour voir les informations de l'article.</li>
                        <li>Cliquez sur le bouton <img src=" {{ asset(config('nhelper.supprim'))}}" alt=""> pour supprimer. </li>
                        <li>Cliquez sur le bouton <img src="{{asset(config('nhelper.actif'))}}" alt=""> dans la colonne <b>Statut</b> pour changer l'état l'article. Notons que l'état inactif fait que le produit l'apparait plus dans la liste des article lors de l'éditions des documents.</li>
                    </ol>
                </div>
                <div class="row">
                    <h3>Catégorie d’articles</h3>
                        La catégorisation des articles permet de regrouper les produits/services suivant des classes spécifiques ou en fonction de la TVA applicable à un groupe d’articles donné.

                    <div class="col-6">
                        <br><h4>Créer une nouvelle catégorie d’articles</h4>
                            <ol>
                                <li>Cliquez sur Catégories dans le menu de navigation puis sur <b>Nouveau</b></li>
                                <li>Remplissez les différents champs pour ajouter une nouvelle catégorie ICE.</li>
                                <li>Consulter la liste des catégories en cliquant sur Catégories dans le menu de navigation puis sur Liste</li>
                            </ol><br>
                        <h4>Ajouter une catégorie à un article</h4>
                        <ol>
                            <li>Cliquer sur le bouton <img src="{{asset(config('nhelper.Cat'))}}img/Cat.png" alt=""> dans la colonne Actions de la liste des articles, ICE</li>
                            <li>Cochez le(s) case(s) correspondants aux catégories de l’article sélectionné</li>
                        </ol>
                    </div>
                    <div class="col-6">
                        <img src="{{asset(config('nhelper.AjoutCat'))}}" width="100%" height="50%" alt=""><br><br>
                        <img src="{{asset(config('nhelper.Rcat'))}}" width="100%" height="50%" alt="">
                    </div>
                </div>

            </div>
        </p>
    </section>
    <section class="docs-section">
        <p>
            <h3>Gestion des Clients </h3>
            Cliquez sur<b> Clients </b>dans le menu principal pour accéder à la liste complète de vos clients.
            <div class="row">
                <div class="col-6">
                    <img src="{{asset(config('nhelper.Cajout'))}}" width="100%" height="50%" alt="">

                    <img src="{{asset(config('nhelper.listCli'))}}" width="100%" height="50%" alt="">
                </div>
                <div class="col-6">
                     <b>Ajouter un Client</b>
                    <ol>
                        <li>Cliquez sur <b>Clients</b> dans le menu principal  puis sur <b>nouveau</b>.</li>
                        <li>Saisissez les informations de chaque champs.</li>
                        <li>Les étiquettes vous permettent de catégoriser vos clients. Ex : VIP, Mauvais Payeur….</li>
                        <li>Cliquez sur <b>Sauvegarder</b>  pour enregistrer le Tiers.</li>
                    </ol>
                    <b>Modification Suppression et informations</b>
                    <ol>
                        <li>Cliquez sur le bouton <img src="{{asset(config('nhelper.modif'))}}" alt="">  pour modifier les informations.</li>
                        <li>Cliquez sur le bouton <img src="{{asset(config('nhelper.supprim'))}}" alt=""> pour supprimer. </li>
                        <li>Cliquez sur le bouton <img src="{{asset(config('nhelper.actif'))}}" alt=""> dans la colonne <b>Statut</b> pour changer l'état du client. Notons que l'état inactif fait que le produit
                         l'apparait plus dans la liste des clients lors de l'éditions des documents.</li>
                    </ol>

                </div>
            </div>
        </p>
    </section>
    <section class="docs-section">
        <p>
            <h3>Gestion des documents</h3>
            <img src="{{asset(config('nhelper.DOC1'))}}" width="100%" height="20%" alt="importer"><br>
         <div class="row">
            <div class="col-6"><br>
                <h4>Edition de Facture / Devis / Proforma</h4>
                <ol>
                    <li>Cliquer sur Vente dans le menu principal .</li>
                    <li>Cliquer sur Facture dans la barre de menu puis sur <b>Nouvelle Facture</b>. <em>(image ci-dessus)</em></li>
                    <li>Sélectionner ou ajouter un nouveau client.</li>
                    <li>Remplir les différents champs.</li>
                    <li><b>Sauvegarder</b> la facture ( Vous serez redirigé vers une nouvelle page de détaille des produits)</li>
                    <li>Voir l'aperçu du document <img src="{{asset(config('nhelper.Apercu'))}}" alt="">  </li>
                    <li>Modifier la facture avec ce bouton <img src="{{asset(config('nhelper.Modif1'))}}" alt=""> </li>
                    <li>Valider la facture pour qu’elle soit effective avec ce bouton <img src="{{asset(config('nhelper.valider'))}}" alt=""></li>
                    <li>Transformer un <b>Devis</b> en <b>Proforma</b> avec ce bouton <img src="{{asset(config('nhelper.proforma'))}}" alt="">  </li>
                    <li>Passer d'un <b>Devis</b> ou d'un <b>Proforma</b> à une <b>Facture</b> avec ce bouton <img src="{{asset(config('nhelper.Facture'))}}" alt="">  </li>
                    <li>Certifier la <b>facture</b> en cliquant sur le bouton de certification. <img src="{{asset(config('nhelper.Certification'))}}" alt=""></li>
                </ol>
               <b>NB :</b> Vous pouvez insérer de nouveaux produits lors de l'édition de la facture, il vous sera demandé
                de les valider afin qu'ils soient enregistrés dans la liste des produits et services. Vous avez aussi la possibilité de créer un nouveau client grâce <img src="{{asset(config('nhelper.newclient'))}}" alt="">
            </div>
            <div class="col-6">
                <img src="{{asset(config('nhelper.fact'))}}" width=100% alt=""><br>
                <em>Après sauvegarde</em><br>
                <img src="{{asset(config('nhelper.fact2'))}}" width=100% alt="">

            </div>
         </div>

        </p>
        <p>
            <h4>Liste des factures</h4>
            Retrouvez l’ensemble de vos factures en cliquant sur <b> Factures </b> dans le menu de navigation puis sur Liste <br>

            <div class="row">
                <div class="col 6">
                    <img src="{{asset(config('nhelper.FACLIST'))}}"width="100%" alt="">

                </div>
                <div class="col 6">
                    <br>Cliquez sur :
                    <ol>
                        <li> <img src="{{asset(config('nhelper.Preview'))}}" alt=""> pour avoir un aperçu de la facture</li>
                        <li><img src="{{asset(config('nhelper.M1'))}}" alt=""> pour modifier la facture</li>
                        <li> <img src="{{asset(config('nhelper.valide1'))}}" alt=""> pour valider la facture</li>
                        <li><img src="{{asset(config('nhelper.certifier'))}}" alt=""> pour certifier la facture </li>
                    </ol>
                </div>
            </div>
        </p>
        <p>
            <h4>Liste des Devis</h4>
            Retrouvez l’ensemble de vos devis en cliquant sur <b> Desvis </b> dans le menu de navigation puis sur Liste <br>

            <div class="row">
                <div class="col 6">
                    <img src="{{asset(config('nhelper.FACLIST'))}}"width="100%" alt="">

                </div>
                <div class="col 6">
                    <br>Cliquez sur :
                    <ol>
                        <li><img src="{{asset(config('nhelper.Preview'))}}" alt=""> pour avoir un aperçu de le Devis</li>
                        <li><img src="{{asset(config('nhelper.M1'))}}" alt=""> pour modifier le Devis</li>
                        <li><img src="{{asset(config('nhelper.valide1'))}}" alt=""> pour valider le Devis</li>
                        <li><img src="{{asset(config('nhelper.proforma1'))}}" alt=""> pour passer au proforma</li>
                        <li><img src="{{asset(config('nhelper.facture1'))}}" alt=""> pour passer à la facture</li>
                        <li><img src="{{asset(config('nhelper.A_R'))}}" alt=""> pour Accepter ou Réfuser un Devis</li>
                        <li><img src="{{asset(config('nhelper.supprimer'))}}" alt=""> pour supprimer </li>
                    </ol>
                </div>
            </div>
        </p>
        <p>
            <h4>Liste des Proforma</h4>
            Retrouvez l’ensemble de vos devis en cliquant sur <b> Proforma </b> dans le menu de navigation puis sur Liste <br>

            <div class="row">
                <div class="col 6">
                    <img src="{{asset(config('nhelper.FACLIST'))}}"width="100%" alt="">

                </div>
                <div class="col 6">
                    <br>Cliquez sur :
                    <ol>
                        <li><img src="{{asset(config('nhelper.Preview'))}}" alt=""> pour avoir un aperçu de le Proforma</li>
                        <li><img src="{{asset(config('nhelper.M1'))}}" alt=""> pour modifier le Proforma</li>
                        <li><img src="{{asset(config('nhelper.valide1'))}}" alt=""> pour valider le Proforma</li>
                        <li><img src="{{asset(config('nhelper.facture1'))}}" alt=""> pour passer à la facture</li>
                        <li><img src="{{asset(config('nhelper.A_R'))}}" alt=""> pour Accepter ou Réfuser un Proforma</li>
                        <li><img src="{{asset(config('nhelper.supprimer'))}}" alt=""> pour supprimer </li>
                    </ol>
                </div>
            </div>
        </p>

    </section>

    <section class="docs-section">
        <p>
            <h3>Edition de l'Avoir </h3>
            <ol>
                <li>Cliquer sur Facture dans la barre de menu puis sur <b>Ajouter un Avoir</b>. <em>(image ci-dessus)</em></li>
                <li>Sélectionner la <b>Facture certifiée </b>en saisissant sa référence ou le montant de la facture. .</li>
                <li> Cocher le type de type d'avoir <b>Remise</b> ou <b>Retour</b>  sur la <b>Facture</b> .</li>
                <li>Remplir les différents champs.</li>
                <li><b>Sauvegarder</b> la facture ( Vous serez redirigé vers une nouvelle page de détaille des produits)</li>
                <li>Voir l'aperçu du document <img src="{{asset(config('nhelper.Apercu'))}}" alt=""></li>
                <li>Modifier la facture avec ce bouton <img src="{{asset(config('nhelper.Modif1'))}}" alt=""></li>
                <li>Valider la facture pour qu’elle soit effective avec ce bouton <img src="{{asset(config('nhelper.valider'))}}" alt=""></li>
                <li>Certifier la <b>facture</b> en cliquant sur le bouton de certification. <img src="{{asset(config('nhelper.Certification'))}}" alt=""></li>
            </ol>

        </p>
        <p>
            <h4>Liste des factures</h4>
            Retrouvez l’ensemble de vos Avoirs en cliquant sur <b> Facture </b> dans le menu de navigation puis sur Liste <br>

            <div class="row">
                <div class="col 6">
                    <img src="{{asset(config('nhelper.FACLIST'))}}"width="100%" alt="">

                </div>
                <div class="col 6">
                    <br>Cliquez sur :
                    <ol>
                        <li> <img src="{{asset(config('nhelper.Preview'))}}" alt=""> pour avoir un aperçu de l'Avoir</li>
                        <li><img src="{{asset(config('nhelper.M1'))}}" alt=""> pour modifier l'Avoir</li>
                        <li> <img src="{{asset(config('nhelper.valide1'))}}" alt=""> pour valider l'Avoir</li>
                        <li><img src="{{asset(config('nhelper.certifier'))}}" alt=""> pour certifier l'Avoir </li>
                    </ol>
                </div>
            </div>
        </p>
    </section>
    <section class="docs-section">
        <p>
            <h3> Espace Configuration </h3>
            Configurer les paramètres généraux et spécifiques des documents.
            <div class="row">
                <div >

                    Cliquer sur <b>Configuration</b> dans le menu principal <br>
                    <b>Remplir les paramètres Généraux</b><br>
                    <img src="{{asset(config('nhelper.Generaux'))}}" alt=""><br>

                    <ol>
                        <li>Choisir le modèle de document  <br></li>
                        <li>Saisir <b>l'introduction</b>, la <b>note</b> et le <b>pied de page</b> qui s'afficheront par défaut sur chaque document</li>
                        <li>Cliquer sur le bouton</li>
                    </ol>
                    <b>Remplir les paramètres Spécifique </b> <br>
                    <img src="{{asset(config('nhelper.docFactu'))}}" alt=""><br>

                    <ol>
                        <li><b>Le Format</b> : il permet d'identifier le document. Il est composé de la date , du préfixe et du compteur.
                        <ul>
                            <li> < prefix > = <b>Préfixe</b> </li>
                            <li> < Compteur > = <b>Compteur</b> </li>
                            <li> < mm > = <b>Mois</b> </li>
                            <li> < aaaa > = <b>Année</b> </li>
                        </ul>
                        </li>
                        <li><b>Le préfixe</b> : il permet de spécifier le type du document. <b>Exemple :</b> <img src="{{asset(config('nhelper.refere'))}}"  alt=""> </li>
                        <li><b>La taille du compteur</b> : Elle permet d'indiquer le nombre de maximum de caractères que peut</li>
                        <li><b>Introduction</b> : Elle permet de spécifier l'introduction du document</li>
                        <li><b>Notes</b> : Elle permet de spécifier la note du document</li>
                    </ol>
                    <b>Procedure d'ajout d'un membre utilisateur</b><br>
                    <ol>
                        <li>Cliquer sur l'ongle <b>Entreprise</b>.</li>
                        <li>Cliquer sur bouton d'ajout d'un membre. <img src="{{asset(config('nhelper.Amembre'))}}" height="40" width="40" alt=""></li>
                        <li>Remplisser les differents champs puis Sauvegarder </li>
                        <li>Un Email sera envoyé à l'utilisateur avec les informations de connexion à son compte</li>
                    </ol>


                </div>

            </div>
        </p>
    </section>

</article>

@endsection
