@extends('base')

@section('title', "Politique de confidentialité")

@section('main')
    <section id="el-breadcrumb" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <a href="{{ route('home.page') }}">Accueil /</a>
                <span>Terme et conditions d'utilisation</span>
            </div>
        </div>
    </section>
    <section id="el-about" class="el-center-box">
        <div class="el-content-area">
            <div class="accordion">
                <h3>Article 1 : Définitions</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Pour les besoins des présentes Conditions Générales d’Utilisation et de Vente (ci-après « CGUV »), chacun des termes ci-dessous, qu’ils soient employés au singulier ou au pluriel, s’entend au sens de la définition qui suit :</p>
                    <div>
                        <h2 class="el-intitule">Bénéficiaire</h2>
                        <p>Désigne l’Utilisateur ou, le cas échéant, la personne se présentant à un Evénement et munie d’un Billet valide ; </p>
                        <h2 class="el-intitule">Billet</h2>
                        <p>Désigne l’imprimé, le document électronique, ou tout procédé électronique constatant la transaction opérée entre l’Organisateur et l’Utilisateur via la Plateforme et donnant droit d’accès à ce dernier à un Evènement ;</p>
                        <h2 class="el-intitule">CNDP</h2>
                        <p>Désigne la Commission Nationale de contrôle de la protection des Données à caractère Personnel ;</p>
                        <h2 class="el-intitule">Commande</h2>
                        <p>Désigne l’action de commander un Billet sur la Plateforme par un Utilisateur ;</p>
                        <h2 class="el-intitule">Editeur</h2>
                        <p>Désigne l’éditeur de la Plateforme, à savoir la société ELECTRONIC EVENTS, société à responsabilité limitée d’associé unique au capital de 100.000 dirhams, dont le siège social est sis à 4 Rue Abdelouahab Azzaqqaq Etg N°1 Appt N°1 Belvedere – Casablanca, immatriculée au registre de commerce de Casablanca sous le numéro 403217 et identifiée fiscalement sous le numéro 25254268. </p>
                        <h2 class="el-intitule">Evénement</h2>
                        <p> Toute organisation festive ou de loisir, spectacle, concert de musique, manifestation culturelle ou sportive commanditée par un ou plusieurs organisateurs.</p>
                        <h2 class="el-intitule">Information Renseignée</h2>
                        <p>Désigne toute donnée édictée par l’utilisateur sur la plateforme; </p>
                        <h2 class="el-intitule">Organisateur</h2>
                        <p>Désigne toute personne organisant un Evénement et mettant en vente les Billets y afférents sur la Plateforme ;</p>
                        <h2 class="el-intitule">Plateforme</h2>
                        <p>Désigne la plateforme « lastlevelevent.com », objet des présentes ;</p>
                        <h2 class="el-intitule">Utilisateur</h2>
                        <p>Est un consommateur de la plateforme , toute personne y compris celle titulaire d’un compte et le cas échéant effectuant une commande.</p>
                    </div>
                </div>
                <h3>Article 2 :  Objet</h3>
                <div>
                    <div>
                        <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente </h2>
                        <p>« lastlevelevent.com » est une plateforme web d’intermédiation commerciale mettant en relation un Utilisateur et un Organisateur et permettant à ce dernier de mettre en vente des Billets sur la Plateforme.</p>
                        <p>Les présentes conditions générales s’appliquent à tout achat de Billet réalisée par l’intermédiaire de la Plateforme. L’Editeur agit en tant qu’intermédiaire au stade de la commercialisation mais sans jamais intervenir au niveau de l’organisation de l’Evénement. Les Organisateurs sont donc pleinement responsables du déroulement de l’Evénement. </p>
                        <p>Les présentes conditions générales ne concernent donc pas la tenue de l’Evénement lui-même. Les Organisateurs peuvent ajouter leurs propres conditions concernant la tenue de l’Evénement dans un document qui sera présenté à l’Utilisateur au moment de la réalisation de la Commande. </p>
                    </div>
                </div>
                <h3>Article 3 : Tarifs des billets</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Les tarifs des Billets sont indiqués en dollar américain et en Toutes Taxes Comprises.</p>
                    <p>Etant donné que les Organisateurs disposent d’un droit de modification des différents tarifs durant la période de vente, la facturation, opérée par l’Editeur, est réalisée sur la base des tarifs en vigueur au moment de la création de la Commande par l’Utilisateur. </p>
                </div>
                <h3>Article 4 : Création d'un compte</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Lors de la première création de Commande, chaque Utilisateur doit au préalable créer un compte sur la Plateforme. Cette création implique le renseignement des informations personnelles de l’Utilisateur nécessaires pour son identification. Un identifiant et un mot de passe seront attribués à l’Utilisateur. Ce dernier doit prendre toutes les mesures de précaution requises afin d’empêcher toute utilisation frauduleuse de son compte par des personnes non autorisées.</p>
                    <p>Pour les créations de Commande ultérieures, l’Utilisateur doit se connecter au compte lui étant attribué. </p>
                </div>
                <h3>Article 5  : Disponibilité et choix de place</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>La Plateforme informe l’Utilisateur, en temps réel, de la disponibilité des Billets lors de la création d’une Commande. Si certains Billets ne sont plus disponibles entre le début et la fin d’une Commande, le système en informera l’Utilisateur. Ce dernier pourra vérifier le contenu de sa Commande avant validation et paiement.</p>
                    <p>Sauf mention contraire lors de la création d’une Commande et sur le Billet, le choix des places est libre lors de l’Evénement. Si l’Organisateur a choisi de mettre en place un système de choix des places, l’Utilisateur sera invité à choisir son siège ou zone lors du processus de création d’une Commande. La localisation sur plan ou schéma est fournie à titre indicative. Elle se veut la plus représentative possible mais n’a pas de valeur contractuelle.</p>
                    <p>Par ailleurs, l’Organisateur et l’Editeur se réservent le droit de limiter le nombre de Billet à commander par chaque Utilisateur. </p>
                </div>
                <h3>Article 6 : Paiement</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>La validation d’une Commande implique l’obligation de payer le prix indiqué. Un seul mode de règlement est autorisé par Commande.</p>
                    <h2 class="el-intitule">Paiement par carte bancaire </h2>
                    <p>Il est possible de régler une Commande par Carte Bancaire valide. Ledit paiement est traité par notre partenaire bancaire, le Centre Monétique Interbancaire (CMI).</p>
                    <p>Une fois la transaction validée par notre partenaire bancaire, le compte bancaire de l’Utilisateur sera débité du montant de la Commande. A l’issu de la transaction, une confirmation de Commande lui sera adressée par mail.</p>
                    <p>Dans le cas où un paiement se révèle invalide par notre partenaire bancaire, après émission d’un Billet, ce dernier sera invalidé et, par conséquent, ne vous permettra à accéder à l’Evénement. </p>
                    <p>Les échanges avec la Plateforme sont sécurisés. Les coordonnées bancaires de l’Utilisateur ne sont pas conservées par notre système. Les paiements électroniques en ligne sont réalisés sur la Plateforme via la page dédiée à notre partenaire bancaire, qui en assure la sécurisation à l’aide des technologies de chiffrement et d’authentification appropriées.</p>
                    <h2 class="el-intitule">Paiement alternatif</h2>
                    <p>Dans les cas où il est permis un paiement via des canaux autres que ceux proposés par notre partenaire bancaire, la Plateforme réalisera une réservation de la Commande de l’Utilisateur. Une fois le paiement effectué dans un délai de 12 heures et sa confirmation par l’Organisateur auprès de l’Editeur, la Commande sera envoyée par courrier électronique à l’Utilisateur selon les modalités visées à l’Article 7 ci-après. Passé ledit délai de 12 heures, la réservation sera automatiquement annulée.</p>
                </div>
                <h3>Article 7 : Confirmation de la commande</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Dès lors que le paiement est effectué, un message de confirmation est immédiatement envoyé à l’adresse mail de l’Utilisateur.</p>
                    <p>A la suite de la confirmation de la Commande par l’Utilisateur, l’Editeur ou, le cas échéant, l’Organisateur enverra le Billet à l’Utilisateur qui comprendra les mentions suivantes : </p>
                    <ul>
                        <li>
                            <p>Le nom et prénom de l’Utilisateur et, le cas échéant, ceux du Bénéficiaire ;</p>
                        </li>
                        <li>
                            <p>Le nom, la date et lieu de l’Evénement ;</p>
                        </li>
                        <li>
                            <p>L’identité de l’Organisateur ;</p>
                        </li>
                        <li>
                            <p>Le prix payé par l’Utilisateur ;</p>
                        </li>
                        <li>
                            <p>Le numéro d’identification unique et associé au Billet et à la Commande et un code barre.</p>
                        </li>
                    </ul>
                    <p>Il est alors de la responsabilité de l’Utilisateur de vérifier la bonne réception du Billet, la nature et les mentions y mentionnées et, en cas d’erreur, d’émettre des réserves en avertissant l’Editeur de celles-ci dans un délai : </p>
                    <ul>
                        <li>
                            <p>n’excédant pas 72 heures ; ou </p>
                        </li>
                        <li>
                            <p>si l’échéance de ce délai vient au-delà de la date de l’Evénement, il est donc réduit à 6 heures.</p>
                        </li>
                    </ul>
                    <p>L’Utilisateur doit prendre toutes les mesures de précaution requises afin d’empêcher toute utilisation frauduleuse et non autorisée du Billet par des tiers. En outre, il ne sera remis aucun duplicata, y compris en cas de perte ou de vol, autre que le Billet initial. </p>
                    <p>Il y a lieu de noter que certains fournisseurs de messagerie peuvent retarder l’envoi de mail. En cas de non réception du Billet après plusieurs heures, l’Utilisateur est convié de contacter le service client de l’Editeur. La non réception du Billet n’entraine pas l’invalidité de la Commande. </p>
                </div>
                <h3>Article 8 : Conditions de présentation des Billets lors des Evénements</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Avant de se présenter à l’Evénement, l’Utilisateur doit imprimer le Billet sur support papier A 4. Pour être accepté, le Billet doit présenter un état total d’intégrité et de lisibilité correct ; les Billets endommagés ou illisibles seront considérés comme étant non valides.</p>
                    <p>La présentation d’un Billet via un support numérique (exemple : smartphone) ne sera acceptée que si l’Organisateur le stipule expressément dans les indications figurant sur le Billet.</p>
                    <p>L’Editeur décline toute responsabilité concernant toute anomalie pouvant survenir au cours d’une Commande, du téléchargement ou de l’impression d’un Billet.</p>
                </div>
                <h3>Article 9 : Conditions spéciales d’utilisation et de présentation des Billets</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Un Billet ne peut être utilisé qu’une seule fois pour accéder à un Evénement. Ainsi en cas de perte, vol, duplication, seule la première personne à présenter le Billet sera admise à assister à l’Evénement. Un détenteur de Billet qui aurait déjà été utilisé ne pourra prétendre à aucun remboursement. La reproduction, la duplication ou la contrefaçon des Billets sont prohibées.</p>
                    <p>Le Billet est uniquement valable pour le lieu, la date et heure auquel il appartient. Le Billet doit être conservé jusqu’à la fin de l’Evénement.</p>
                    <p>L’accès à l’Evénement peut être nominatif, selon les conditions fixées par l’Organisateur et indiquées lors de la création de la Commande, dans le mail de confirmation de Commande et figurant sur le Billet. Dans cette hypothèse, en complément de l’identité de l’Utilisateur, celle du Bénéficiaire sera indiquée sur le Billet. Dans ce cas, en plus du Billet, le Bénéficiaire devra présenter une pièce d’identité valide à l’entrée du lieu de l’Evénement et qui devra correspondre au nom inscrit sur le Billet. Les Billets nominatifs demeurent personnels et incessible, sauf sur autorisation expresse et préalable de l’Organisateur.</p>
                    <p>Seul l’Organisateur est en droit de refuser l’accès au lieu de l’Evénement. Aucun remboursement ne sera alors accordé.</p>
                    <p>L’Organisateur est libre de contrôler la validité des Billets lors de l’accès à l’Evénement. Il n’est pas tenu de vérifier l’identité du Bénéficiaire du Billet, étant donné que le Billet possède un numéro d’identification unique et un code barre. De ce fait, l’Utilisateur et le Bénéficiaire doivent veiller à la confidentialité de leurs Billets. L’Organisateur n’est pas tenu de vérifier l’authenticité du Billet. </p>
                </div>
                <h3>Article 10 : Remboursement et annulation d’un Evénement</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Conformément aux dispositions de l’article 42 de la loi n° 31-08 édictant des mesures de protection du consommateur, les Billets ne peuvent faire l’objet d’un droit de rétractation. Toute Commande est alors juridiquement considérée comme ferme et définitive.</p>
                    <p>Un Billet ne peut être remboursé même en cas de perte ou de vol, ni repris, ni échangé. Seuls les cas suivant peuvent provoquer un remboursement : </p>
                    <ul>
                        <li>
                            <p>Si l’Evènement est annulé ou substantiellement modifié ; </p>
                        </li>
                        <li>
                            <p>Si l’Organisateur autorise le remboursement et met à disposition les fonds pour rembourser.</p>
                        </li>
                    </ul>
                    <p>Etant entendu que toute décision d’annulation, de report ou de modification d’un Evénement est de l’entière responsabilité de l’Organisateur. </p>
                    <p>Dans les cas visés ci-avant, le remboursement n’interviendra qu’en faveur de l’Utilisateur et ne concernera que le prix du Billet. Aucun frais supplémentaire de quelque nature que ce soit ne sera remboursé ou dédommagé. Aucune demande de remboursement ne sera prise en compte si elle intervient après l’expiration d’un délai de 20 jours à compter de la date d’annulation de l’Evénement.</p>
                    <p>À l’annonce de l’annulation ou d’une modification de date, de l’heure ou du lieu d’un Evénement pour lequel il a été effectué une Commande, l’Utilisateur autorise expressément l’Editeur, dans la mesure du possible et lorsqu’il aura lui-même été prévenue par l’Organisateur, à utiliser les informations renseignées par l’Utilisateur pour le tenir informer de la démarche à suivre. </p>
                    <p>En tout état de cause, l’Utilisateur est invité à vérifier 24 heures avant la date de l’Evénement que celui-ci est bien maintenu sans aucune modification.</p>
                </div>
                <h3>Article 11 : Service client</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Pour toute demande de l’Utilisateur relative à l’Evénement ou aux conditions d’accès, celui-ci doit s’adresser directement à l’Organisateur dont il trouvera les coordonnées sur la page de vente des Billets. Si la demande ne peut être satisfaite, l’Organisateur prendra contact avec l’Editeur. </p>
                    <p>Pour toute demande technique concernant l’accès à la Plateforme et la réception de Billet après confirmation de Commande, l’Utilisateur peut contacter l’Editeur via l’adresse mail : contact@events.ma</p>
                </div>
                <h3>Article 12 : Responsabilités</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <h2 class="el-intitule">Responsabilité de l’Utilisateur</h2>
                    <p>L’Utilisateur est seul responsable de la complétude et de l’exactitude des Informations Renseignées. Il s’engage à vérifier que celles-ci ne contiennent pas d’informations susceptibles de porter atteinte aux droits d’un tiers ou d’enfreindre les règles d’ordre public. En aucun cas, le contenu du l’Utilisateur ne doit pas être mensonger, inexact ou trompeur.</p>
                    <p>Par ailleurs, l’Utilisateur est seul responsable en cas d’utilisation de la carte bancaire d’un tiers.</p>
                    <h2 class="el-intitule">Responsabilité de l’Editeur </h2>
                    <p>L’Editeur s’engage à mettre en œuvre tous les moyens nécessaires afin d’assurer au mieux une bonne utilisation de la Plateforme par l’Utilisateur. En effet, il fait ses meilleurs efforts afin de rendre l’utilisation de la Plateforme disponible 24 heures sur 24 et 7 jours sur 7, indépendamment des opérations de maintenance programmées, sous réserves des stipulations des présentes. </p>
                    <p>Toutefois, l’Editeur décline toute responsabilité en cas :</p>
                    <ul>
                        <li>
                            <p>De refus d’accès à un Evénement décidé par un Organisateur ; </p>
                        </li>
                        <li>
                            <p>De report ou de l’annulation d’un Evénement décidé par un Organisateur ou par les autorités ; </p>
                        </li>
                        <li>
                            <p>De renseignement par un Utilisateur des données personnelles d’un Bénéficiaire, sans le consentement de ce dernier ;</p>
                        </li>
                        <li>
                            <p>D’interruptions, de pannes, de modifications ou de dysfonctionnement dans l’utilisation de la Plateforme et ce, quelles qu’en soient l’origine et la provenance ;</p>
                        </li>
                        <li>
                            <p>D’impossibilité d’accès à la Plateforme en raison de problèmes techniques et ce, quelles qu’en soient l’origine et la provenance ; </p>
                        </li>
                        <li>
                            <p>De dommages directs ou indirects causés à l’Utilisateur, quelle qu’en soit la nature, résultant du contenu des informations et/ou de l’accès, de la gestion, de l’utilisation, de l’exploitation, du dysfonctionnement et/ou de l’interruption de la Plateforme ;</p>
                        </li>
                        <li>
                            <p>D’utilisation anormale ou d’exploitation illicite de la Plateforme par tout Utilisateur ; </p>
                        </li>
                        <li>
                            <p>D’attaque ou de piratage informatique, de privation, de suppression ou d’interdiction, temporaire ou définitive, et pour quelle que cause que ce soit, de l’accès au réseau internet. </p>
                        </li>
                    </ul>
                    <p>La responsabilité de l’Editeur ne pourra en aucun cas être engagée à la suite de tout dommage, erreur ou carence lorsque l’inexécution ou la mauvaise exécution reprochée résulte : </p>
                    <ul>
                        <li>
                            <p>D’une faute, négligence, omission ou défaillance de l’Utilisateur ;</p>
                        </li>
                        <li>
                            <p>D’une communication tardive d’informations par l’Utilisateur ou par l’Organisateur ;</p>
                        </li>
                        <li>
                            <p>D’utilisation frauduleuse des moyens d’authentification communiqués à l’Utilisateur ;</p>
                        </li>
                        <li>
                            <p>Du non-respect des recommandations de l’Editeur ;</p>
                        </li>
                        <li>
                            <p>D’une faute, négligence ou omission d’un tiers sur lequel l’Editeur n’a aucun pouvoir de surveillance ;</p>
                        </li>
                        <li>
                            <p>En cas de survenance d’un évènement de force majeure. </p>
                        </li>
                    </ul>
                    <p>L’Utilisateur renonce donc à demander réparation à l’Editeur à quelque titre que ce soit, de dommages tels que notamment des pertes trouvant leur origine ou étant la conséquence de l’exécution des présentes.</p>
                    <p>Tout Utilisateur est seul responsable des dommages causés aux tiers et des conséquences des réclamations ou actions qui pourraient en découler. L’Utilisateur renonce à exercer tout recours contre l’Editeur dans le cas de poursuites diligentées par un tiers à son encontre du fait de l’utilisation et/ou de l’exploitation illicite de la Plateforme, en cas de perte par un Utilisateur de son mot de passe ou en cas d’usurpation de son identité.</p>
                    <p>L’Editeur ne saurait être tenu responsable du déroulement de l’Evénement et de l’exécution des obligations de l’Organisateur durant celui-ci. L’Evénement se déroulant sous la seule responsabilité de l’Organisateur, la responsabilité de l’Editeur ne saurait être engagée concernant des raisons telles que l’annulation, le report, la modification de l’Evénement ou tout autre incident qui pourrait avoir lieu durant l’Evénement. </p>
                </div>
                <h3>Article 13 : Données personnelles</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>Les informations nécessaires afin d’assurer la création du compte de l’Utilisateur et le traitement de sa Commande par l’Editeur sont : nom, prénom, numéro de téléphone, adresses physique et mail et, s’il y a lieu, le numéro de la pièce d’identité de l’Utilisateur. Elles peuvent également être utilisées par l’Editeur afin de vous contacter en cas de problème dans le traitement de votre Commande. </p>
                    <p>L’Editeur se réserve le droit de collecter des données sur l’Utilisateur, notamment par l’utilisation de cookies. La collecte des données par l’Editeur, responsable du traitement, est nécessaire à la prise en compte des demandes de l’Utilisateur. </p>
                    <p>D’autres informations peuvent être collectées à la demande de l’Organisateur. L’Editeur collecte ces données pour le compte de l’Organisateur et les porte à sa connaissance. L’Organisateur est alors responsable de la bonne conservation et utilisation des données auxquelles il a pu avoir accès. </p>
                    <p>L’Editeur met en œuvre tous les moyens pour assurer la confidentialité et la sécurité des Informations Renseignées. Les informations à caractère personnel collectées sont utilisées uniquement par l’Editeur, l’Organisateur et, le cas échéant, des tiers autorisés.</p>
                    <p>En acceptant les présentes Conditions Générales d’Utilisation et de Vente, l’Utilisateur autorise expressément l’Editeur à transmettre ses données personnelles à l’Organisateur. L’Editeur ne pourrait être tenu responsable de l’utilisation qui pourrait être faite de ces données. L’Organisateur est le seul responsable de la gestion et du contenu qu’il adressera à l’Utilisateur. </p>
                    <p>Conformément à la loi n° 09-08, promulguée par Dahir 1-09-15 du 18 février 2009, relative à la protection des personnes physiques à l’égard du traitement des données à caractère personnel, l’Editeur s’engage à protéger les données personnelles de l’Utilisateur et l’informe qu’il dispose d’un droit d’accès, de rectification et d’opposition au traitement de ses informations qui le concernent, qu’il peut exercer en s’adressant à : Email : contact@lastlevelevent.com</p>
                    <p>Ce traitement a été notifié et est en cours de procédure d’autorisation par la CNDP.</p>
                </div>
                <h3>Article 14 : Cookies</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>L’Utilisateur est informé que, lors de ses visites sur la Plateforme, un cookie peut s’installer automatiquement sur son logiciel de navigation et être temporairement conservé en mémoire sur son disque dur. Un cookie est un élément qui ne permet pas d’identifier l’Utilisateur mais sert à enregistrer des informations relatives à la navigation de celui-ci sur la Plateforme. Ces informations sont utilisées en partie aux fins d’optimisation de la sécurité de la Plateforme et de fournir un service optimal. </p>
                    <p>L’Utilisateur reconnaît avoir été informé de cette pratique et autorise expressément et sans opposition ni réserve son utilisation.</p>
                </div>
                <h3>Article 15 : Droit applicable</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>La Plateforme ainsi que les modalités et les conditions de son utilisation sont régies par le droit Marocain, quel que soit le lieu d’utilisation et le lieu d’organisation de l’Evénement. En cas de contestation éventuelle, et après échec de toute tentative de recherche d’une solution amiable dans un délai de trente (30) jours à compter de la date de survenance de ladite contestation, le tribunal de commerce sera le seul compétent pour connaître de ce litige.</p>
                </div>
                <h3>Article 16 : Acceptation des Conditions Générales d’Utilisation et de Vente</h3>
                <div>
                    <h2 class="el-intitule">Conditions Générales d’Utilisation et de Vente</h2>
                    <p>L’Utilisateur déclare avoir pris connaissance et accepté les présentes Conditions Générales d’Utilisation et de Vente ainsi que les éventuelles conditions fixées par l’Organisateur concernant la tenue de l’Evénement. </p>
                    <p>L’Editeur se réserve la faculté de modifier, à tout moment, les présentes Conditions Générales d’Utilisation et de Vente en publiant une nouvelle version de ces dernières sur la Plateforme. Ces modifications entreront en vigueur dès leur mise en ligne sur la Plateforme et seront donc opposables à tout Utilisateur dès cet instant.</p>
                    <p>En général, toute utilisation de la Plateforme vaut adhésion parfaite et consentement sans réserve aux Conditions Générales d’Utilisation et de Vente et aux éventuelles nouvelles conditions.</p>
                    <p>Les données de connexion et de transaction conservées par la Plateforme font preuve. </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @parent
    <script>
        $( function() {
            $( ".accordion" ).accordion({
                collapsible: true,
                heightStyle: "content"
            });
        });
    </script>

    <script>
        const title = document.querySelectorAll('#el-popular-products .el-list');
        title.forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__fadeInLeft'
                },
            })
        });

        const card = document.querySelectorAll('#el-popular-products .el-card');
        card.forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__zoomIn'
                },
            })
        });

        gsap.from("#el-sponsors .el-title-section", {
            scrollTrigger: {
                start: 'top bottom',
                end: 'bottom top',
                trigger: "#el-sponsors .el-title-section",
                toggleClass: 'animate__zoomInDown'
            },
        });

        const heros = document.querySelectorAll('#el-heros .el-hero');
        heros.forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__zoomIn'
                },
            })
        });
        /* gsap.from("#el-sponsors .el-title-section", 1.5, {
            delay: .5,
            scale: 0,
            opacity: 0,
            ease: "expo.out"
        }); */

        const footerRubrique = document.querySelectorAll('footer .el-block li');
        footerRubrique.forEach(item => {
            gsap.from('footer .el-block', {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__fadeInLeft'
                },
            });

        });
    </script>
@endsection
