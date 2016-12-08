<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setActive('1');
        $user1->setEmail('petter@stud.ntnu.no');
        $user1->setFirstName('Petter');
        $user1->setLastName('Johansen');
        $user1->setGender('0');
        $user1->setPhone('95347865');
        $user1->setUserName('petjo');
        $user1->setPassword('1234');
        $user1->addRole($this->getReference('role-4'));
        $user1->setFieldOfStudy($this->getReference('fos-1'));
        $user1->setPicturePath('images/defaultProfile.png');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setActive('1');
        $user2->setEmail('ida@stud.ntnu.no');
        $user2->setFirstName('Ida');
        $user2->setLastName('Andreassen');
        $user2->setGender('1');
        $user2->setPhone('95267841');
        $user2->setUserName('idaan');
        $user2->setPassword('1234');
        $user2->addRole($this->getReference('role-1'));
        $user2->setFieldOfStudy($this->getReference('fos-2'));
        $user2->setPicturePath('images/defaultProfile.png');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setActive('1');
        $user3->setEmail('kristoffer@stud.ntnu.no');
        $user3->setFirstName('Kristoffer');
        $user3->setLastName('Bø');
        $user3->setGender('0');
        $user3->setPhone('95148725');
        $user3->setUserName('kribo');
        $user3->setPassword('1234');
        $user3->addRole($this->getReference('role-1'));
        $user3->setFieldOfStudy($this->getReference('fos-3'));
        $user3->setPicturePath('images/defaultProfile.png');
        $manager->persist($user3);

        $user4 = new User();
        $user4->setActive('1');
        $user4->setEmail('alm@mail.com');
        $user4->setFirstName('Thomas');
        $user4->setLastName('Alm');
        $user4->setGender('0');
        $user4->setPhone('12312312');
        $user4->setUserName('thomas');
        $user4->setPassword('123');
        $user4->addRole($this->getReference('role-1'));
        $user4->setFieldOfStudy($this->getReference('fos-1'));
        $user4->setPicturePath('images/defaultProfile.png');
        $manager->persist($user4);

        $user5 = new User();
        $user5->setActive('1');
        $user5->setEmail('a@b.c');
        $user5->setFirstName('Reidun');
        $user5->setLastName('Persdatter Ødegaard');
        $user5->setGender('1');
        $user5->setPhone('92269548');
        $user5->setUserName('reidun');
        $user5->setPassword('123');
        $user5->addRole($this->getReference('role-4'));
        $user5->setFieldOfStudy($this->getReference('fos-1'));
        $user5->setPicturePath('images/defaultProfile.png');
        $manager->persist($user5);

        $user6 = new User();
        $user6->setActive('1');
        $user6->setEmail('b@b.c');
        $user6->setFirstName('Siri');
        $user6->setLastName('Brenna Eskeland');
        $user6->setGender('1');
        $user6->setPhone('99540025');
        $user6->setUserName('siri');
        $user6->setPassword('123');
        $user6->addRole($this->getReference('role-4'));
        $user6->setFieldOfStudy($this->getReference('fos-1'));
        $user6->setPicturePath('images/defaultProfile.png');
        $manager->persist($user6);

        $user7 = new User();
        $user7->setActive('1');
        $user7->setEmail('c@b.c');
        $user7->setFirstName('Eirik');
        $user7->setLastName('Myrvoll-Nilsen');
        $user7->setGender('0');
        $user7->setPhone('93093824');
        $user7->setUserName('eirik');
        $user7->setPassword('123');
        $user7->addRole($this->getReference('role-2'));
        $user7->setFieldOfStudy($this->getReference('fos-1'));
        $user7->setPicturePath('images/defaultProfile.png');
        $manager->persist($user7);

        $user8 = new User();
        $user8->setActive('1');
        $user8->setEmail('d@b.c');
        $user8->setFirstName('Ruben');
        $user8->setLastName('Ravnå');
        $user8->setGender('0');
        $user8->setPhone('98059155');
        $user8->setUserName('ruben');
        $user8->setPassword('123');
        $user8->addRole($this->getReference('role-4'));
        $user8->setFieldOfStudy($this->getReference('fos-1'));
        $user8->setPicturePath('images/defaultProfile.png');
        $manager->persist($user8);

        $user9 = new User();
        $user9->setActive('1');
        $user9->setEmail('e@b.c');
        $user9->setFirstName('Liv');
        $user9->setLastName('Rasdal Håland');
        $user9->setGender('1');
        $user9->setPhone('45506381');
        $user9->setUserName('liv');
        $user9->setPassword('123');
        $user9->addRole($this->getReference('role-2'));
        $user9->setFieldOfStudy($this->getReference('fos-1'));
        $user9->setPicturePath('images/defaultProfile.png');
        $manager->persist($user9);

        $user10 = new User();
        $user10->setActive('1');
        $user10->setEmail('f@b.c');
        $user10->setFirstName('Johannes');
        $user10->setLastName('Bogen');
        $user10->setGender('0');
        $user10->setPhone('95480124');
        $user10->setUserName('johannes');
        $user10->setPassword('123');
        $user10->addRole($this->getReference('role-2'));
        $user10->setFieldOfStudy($this->getReference('fos-1'));
        $user10->setPicturePath('images/defaultProfile.png');
        $manager->persist($user10);

        $user11 = new User();
        $user11->setActive('1');
        $user11->setEmail('g@b.c');
        $user11->setFirstName('Cecilie');
        $user11->setLastName('Teisberg');
        $user11->setGender('1');
        $user11->setPhone('45688060');
        $user11->setUserName('cecilie');
        $user11->setPassword('123');
        $user11->addRole($this->getReference('role-2'));
        $user11->setFieldOfStudy($this->getReference('fos-1'));
        $user11->setPicturePath('images/defaultProfile.png');
        $manager->persist($user11);

        $user12 = new User();
        $user12->setActive('1');
        $user12->setEmail('h@b.c');
        $user12->setFirstName('Håkon');
        $user12->setLastName('Nøstvik');
        $user12->setGender('0');
        $user12->setPhone('99413718');
        $user12->setUserName('haakon');
        $user12->setPassword('123');
        $user12->addRole($this->getReference('role-2'));
        $user12->setFieldOfStudy($this->getReference('fos-1'));
        $user12->setPicturePath('images/defaultProfile.png');
        $manager->persist($user12);

        $user13 = new User();
        $user13->setActive('1');
        $user13->setEmail('i@b.c');
        $user13->setFirstName('Maulisha');
        $user13->setLastName('Thavarajan');
        $user13->setGender('1');
        $user13->setPhone('45439367');
        $user13->setUserName('maulisha');
        $user13->setPassword('123');
        $user13->addRole($this->getReference('role-2'));
        $user13->setFieldOfStudy($this->getReference('fos-1'));
        $user13->setPicturePath('images/defaultProfile.png');
        $manager->persist($user13);

        $userInTeam1 = new User();
        $userInTeam1->setActive('1');
        $userInTeam1->setEmail('sortland@mail.com');
        $userInTeam1->setFirstName('Sondre');
        $userInTeam1->setLastName('Sortland');
        $userInTeam1->setGender('0');
        $userInTeam1->setPhone('12312312');
        $userInTeam1->setUserName('userInTeam1');
        $userInTeam1->setPassword('1234');
        $userInTeam1->addRole($this->getReference('role-1'));
        $userInTeam1->setFieldOfStudy($this->getReference('fos-1'));
        $userInTeam1->setPicturePath('images/defaultProfile.png');
        $manager->persist($userInTeam1);

        /*$user = new User();
        $user->setActive('1');
        $user->setEmail('j@b.c');
        $user->setFirstName('Marte');
        $user->setLastName('Saghagen');
        $user->setGender('1');
        $user->setPhone('97623818');
        $user->setUserName('marte');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('k@b.c');
        $user->setFirstName('Angela');
        $user->setLastName('Maiken Johnsen');
        $user->setGender('1');
        $user->setPhone('91152489');
        $user->setUserName('angela');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('l@b.c');
        $user->setFirstName('Ingrid');
        $user->setLastName('Seip Domben');
        $user->setGender('1');
        $user->setPhone('91104644');
        $user->setUserName('ingrid');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('m@b.c');
        $user->setFirstName('Bjørnar');
        $user->setLastName('Askeland Flatøe');
        $user->setGender('0');
        $user->setPhone('97063217');
        $user->setUserName('bjoernar');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('n@b.c');
        $user->setFirstName('Stig-Martin');
        $user->setLastName('Liavåg');
        $user->setGender('0');
        $user->setPhone('99119941');
        $user->setUserName('stig');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('o@b.c');
        $user->setFirstName('Rune');
        $user->setLastName('Nordmo');
        $user->setGender('0');
        $user->setPhone('11000000');
        $user->setUserName('rune');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('p@b.c');
        $user->setFirstName('Christopher');
        $user->setLastName('Schwartz Kvarme');
        $user->setGender('0');
        $user->setPhone('91383316');
        $user->setUserName('chris');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('q@b.c');
        $user->setFirstName('Anna');
        $user->setLastName('Madeleine Goldsack');
        $user->setGender('1');
        $user->setPhone('98896056');
        $user->setUserName('anna');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('r@b.c');
        $user->setFirstName('Anna');
        $user->setLastName('Kristine Auråen');
        $user->setGender('1');
        $user->setPhone('48265325');
        $user->setUserName('annak');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('s@b.c');
        $user->setFirstName('Hilde');
        $user->setLastName('Schjerven Magnø');
        $user->setGender('1');
        $user->setPhone('47259291');
        $user->setUserName('hilde');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('t@b.c');
        $user->setFirstName('Henrik');
        $user->setLastName('Finsrud');
        $user->setGender('0');
        $user->setPhone('45852380');
        $user->setUserName('henrik');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('u@b.c');
        $user->setFirstName('Aleksander');
        $user->setLastName('Tryggan');
        $user->setGender('0');
        $user->setPhone('99321289');
        $user->setUserName('aleksander');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('v@b.c');
        $user->setFirstName('Thinius');
        $user->setLastName('Alexander Rosé');
        $user->setGender('0');
        $user->setPhone('95119929');
        $user->setUserName('thinius');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('w@b.c');
        $user->setFirstName('Petter');
        $user->setLastName('B Markussen');
        $user->setGender('0');
        $user->setPhone('495479563');
        $user->setUserName('petter');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('x@b.c');
        $user->setFirstName('Christian');
        $user->setLastName('Due Lind');
        $user->setGender('0');
        $user->setPhone('40490269');
        $user->setUserName('christian');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('y@b.c');
        $user->setFirstName('Silje');
        $user->setLastName('Sekkingstad Hauge');
        $user->setGender('1');
        $user->setPhone('91335316');
        $user->setUserName('silje');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('z@b.c');
        $user->setFirstName('Karoline');
        $user->setLastName('Aasen Nilsen');
        $user->setGender('1');
        $user->setPhone('22000000');
        $user->setUserName('karoline');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aa@b.c');
        $user->setFirstName('Hanne');
        $user->setLastName('Høie Grøttum');
        $user->setGender('1');
        $user->setPhone('40000000');
        $user->setUserName('hanne');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ab@b.c');
        $user->setFirstName('Øivind');
        $user->setLastName('Mathias Gitmark');
        $user->setGender('0');
        $user->setPhone('37000000');
        $user->setUserName('oyvind');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ac@b.c');
        $user->setFirstName('Vilde');
        $user->setLastName('Aasvær Sømnes');
        $user->setGender('1');
        $user->setPhone('90792997');
        $user->setUserName('vilde');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ad@b.c');
        $user->setFirstName('Per Ivar');
        $user->setLastName('Hoff');
        $user->setGender('0');
        $user->setPhone('90969768');
        $user->setUserName('per');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ae@b.c');
        $user->setFirstName('Sigrid');
        $user->setLastName('Baardsdatter Kleveland');
        $user->setGender('1');
        $user->setPhone('97152206');
        $user->setUserName('sigridb');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('af@b.c');
        $user->setFirstName('Simen');
        $user->setLastName('Svagård');
        $user->setGender('0');
        $user->setPhone('48058898');
        $user->setUserName('simen');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ag@b.c');
        $user->setFirstName('Martine');
        $user->setLastName('Rønneberg');
        $user->setGender('1');
        $user->setPhone('41078184');
        $user->setUserName('martine');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ah@b.c');
        $user->setFirstName('Vida');
        $user->setLastName('Mortensen Gråberg');
        $user->setGender('1');
        $user->setPhone('97133990');
        $user->setUserName('vida');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ai@b.c');
        $user->setFirstName('Filip Emil');
        $user->setLastName('Schjerven');
        $user->setGender('0');
        $user->setPhone('93499748');
        $user->setUserName('filip');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aj@b.c');
        $user->setFirstName('Harald');
        $user->setLastName('Blehr ');
        $user->setGender('0');
        $user->setPhone('99441106');
        $user->setUserName('harald');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ak@b.c');
        $user->setFirstName('Audun');
        $user->setLastName('Mathias Øvstebø');
        $user->setGender('0');
        $user->setPhone('95421307');
        $user->setUserName('audun');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('al@b.c');
        $user->setFirstName('Kristoffer');
        $user->setLastName('Berg');
        $user->setGender('0');
        $user->setPhone('41333909');
        $user->setUserName('kristoffer');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('am@b.c');
        $user->setFirstName('Ingvild');
        $user->setLastName('Grøtte Bostrøm');
        $user->setGender('1');
        $user->setPhone('41487316');
        $user->setUserName('ingvild');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('an@b.c');
        $user->setFirstName('Polina');
        $user->setLastName('Pires Ferreira');
        $user->setGender('1');
        $user->setPhone('74000000');
        $user->setUserName('polina');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ao@b.c');
        $user->setFirstName('Håvard');
        $user->setLastName('Kjellmo Arnestad');
        $user->setGender('0');
        $user->setPhone('99442592');
        $user->setUserName('haavard');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ap@b.c');
        $user->setFirstName('Lisa');
        $user->setLastName('Sletten');
        $user->setGender('1');
        $user->setPhone('42000000');
        $user->setUserName('lisa');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aq@b.c');
        $user->setFirstName('Heidi Elisabeth');
        $user->setLastName('Sando');
        $user->setGender('1');
        $user->setPhone('41000000');
        $user->setUserName('heidi');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ar@b.c');
        $user->setFirstName('Maren');
        $user->setLastName('Dekov');
        $user->setGender('1');
        $user->setPhone('91000000');
        $user->setUserName('marend');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('as@b.c');
        $user->setFirstName('Mina');
        $user->setLastName('Rahimzaie');
        $user->setGender('1');
        $user->setPhone('98671137');
        $user->setUserName('mina');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-4'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('at@b.c');
        $user->setFirstName('Maren Anna');
        $user->setLastName('Brandsrud');
        $user->setGender('1');
        $user->setPhone('93606278');
        $user->setUserName('marenab');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-4'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('au@b.c');
        $user->setFirstName('Simen');
        $user->setLastName('Rønnekleiv Eriksen');
        $user->setGender('0');
        $user->setPhone('91802553');
        $user->setUserName('simenr');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-4'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('av@b.c');
        $user->setFirstName('Yen-Nhi');
        $user->setLastName('Doan');
        $user->setGender('1');
        $user->setPhone('41741744');
        $user->setUserName('yennhi');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-4'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aw@b.c');
        $user->setFirstName('Vilde');
        $user->setLastName('Strøm');
        $user->setGender('1');
        $user->setPhone('40042692');
        $user->setUserName('vildes');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ax@b.c');
        $user->setFirstName('Camilla');
        $user->setLastName('Restrup Strand');
        $user->setGender('1');
        $user->setPhone('92428152');
        $user->setUserName('camilla');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('ay@b.c');
        $user->setFirstName('Jonathan');
        $user->setLastName('Stang');
        $user->setGender('0');
        $user->setPhone('45883454');
        $user->setUserName('jonathan');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('az@b.c');
        $user->setFirstName('Ingrid');
        $user->setLastName('Meland');
        $user->setGender('1');
        $user->setPhone('90760750');
        $user->setUserName('ingridm');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aaa@b.c');
        $user->setFirstName('Fredrik');
        $user->setLastName('Vegstein');
        $user->setGender('0');
        $user->setPhone('95496787');
        $user->setUserName('fredrik');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aab@b.c');
        $user->setFirstName('Kristian');
        $user->setLastName('Tuv');
        $user->setGender('0');
        $user->setPhone('95901921');
        $user->setUserName('kritu');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aac@b.c');
        $user->setFirstName('Hans Petter');
        $user->setLastName('Harveg');
        $user->setGender('0');
        $user->setPhone('92439505');
        $user->setUserName('hans');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aad@b.c');
        $user->setFirstName('Daniel');
        $user->setLastName('Joly');
        $user->setGender('0');
        $user->setPhone('45073168');
        $user->setUserName('daniel');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('aae@b.c');
        $user->setFirstName('Sigrid');
        $user->setLastName('Da Costa');
        $user->setGender('1');
        $user->setPhone('95944622');
        $user->setUserName('sigridd');
        $user->setPassword('123');
        $user->addRole($this->getReference('role-1'));
        $user->setFieldOfStudy($this->getReference('fos-5'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);*/

        $user10 = new User();
        $user10->setActive('1');
        $user10->setEmail('aaf@b.c');
        $user10->setFirstName('Kamilla');
        $user10->setLastName('Plaszko');
        $user10->setGender('1');
        $user10->setPhone('45484008');
        $user10->setUserName('kampla');
        $user10->setPassword('123');
        $user10->addRole($this->getReference('role-1'));
        $user10->setFieldOfStudy($this->getReference('fos-5'));
        $user10->setPicturePath('images/defaultProfile.png');
        $manager->persist($user10);

        $user11 = new User();
        $user11->setActive('1');
        $user11->setEmail('aag@b.c');
        $user11->setFirstName('Vuk');
        $user11->setLastName('Krivokapic');
        $user11->setGender('0');
        $user11->setPhone('47000000');
        $user11->setUserName('vuk');
        $user11->setPassword('123');
        $user11->addRole($this->getReference('role-2'));
        $user11->setFieldOfStudy($this->getReference('fos-3'));
        $user11->setPicturePath('images/defaultProfile.png');
        $manager->persist($user11);

        $user12 = new User();
        $user12->setActive('1');
        $user12->setEmail('aah@b.c');
        $user12->setFirstName('Markus');
        $user12->setLastName('Gundersen');
        $user12->setGender('0');
        $user12->setPhone('46000000');
        $user12->setUserName('markus');
        $user12->setPassword('123');
        $user12->addRole($this->getReference('role-2'));
        $user12->setFieldOfStudy($this->getReference('fos-3'));
        $user12->setPicturePath('images/defaultProfile.png');
        $manager->persist($user12);

        $user13 = new User();
        $user13->setActive('1');
        $user13->setEmail('aai@b.c');
        $user13->setFirstName('Erik');
        $user13->setLastName('Trondsen ');
        $user13->setGender('0');
        $user13->setPhone('45000000');
        $user13->setUserName('erik');
        $user13->setPassword('123');
        $user13->addRole($this->getReference('role-1'));
        $user13->setFieldOfStudy($this->getReference('fos-3'));
        $user13->setPicturePath('images/defaultProfile.png');
        $manager->persist($user13);

        $user14 = new User();
        $user14->setActive('1');
        $user14->setEmail('assistant@gmail.com');
        $user14->setFirstName('Assistent');
        $user14->setLastName('Johansen');
        $user14->setGender('0');
        $user14->setPhone('47658937');
        $user14->setUserName('assistent');
        $user14->setPassword('1234');
        $user14->addRole($this->getReference('role-3'));
        $user14->setFieldOfStudy($this->getReference('fos-1'));
        $user14->setPicturePath('images/defaultProfile.png');
        $manager->persist($user14);

        $user15 = new User();
        $user15->setActive('1');
        $user15->setEmail('team@gmail.com');
        $user15->setFirstName('Team');
        $user15->setLastName('Johansen');
        $user15->setGender('0');
        $user15->setPhone('47658937');
        $user15->setUserName('team');
        $user15->setPassword('1234');
        $user15->addRole($this->getReference('role-1'));
        $user15->setFieldOfStudy($this->getReference('fos-1'));
        $user15->setPicturePath('images/defaultProfile.png');
        $manager->persist($user15);

        $user16 = new User();
        $user16->setActive('1');
        $user16->setEmail('nmbu@admin.no');
        $user16->setFirstName('Muhammed');
        $user16->setLastName('Thavarajan');
        $user16->setGender('1');
        $user16->setPhone('45439367');
        $user16->setUserName('nmbu');
        $user16->setPassword('1234');
        $user16->addRole($this->getReference('role-4'));
        $user16->setFieldOfStudy($this->getReference('fos-4'));
        $user16->setPicturePath('images/defaultProfile.png');
        $manager->persist($user16);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('admin@gmail.com');
        $user->setFirstName('Admin');
        $user->setLastName('Johansen');
        $user->setGender('0');
        $user->setPhone('47658937');
        $user->setUserName('admin');
        $user->setPassword('1234');
        $user->addRole($this->getReference('role-2'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $user = new User();
        $user->setActive('1');
        $user->setEmail('superadmin@gmail.com');
        $user->setFirstName('Superadmin');
        $user->setLastName('Johansen');
        $user->setGender('0');
        $user->setPhone('47658937');
        $user->setUserName('superadmin');
        $user->setPassword('1234');
        $user->addRole($this->getReference('role-4'));
        $user->setFieldOfStudy($this->getReference('fos-1'));
        $user->setPicturePath('images/defaultProfile.png');
        $manager->persist($user);

        $manager->flush();

        $this->setReference('user-1', $user1);
        $this->setReference('user-2', $user2);
        $this->setReference('user-3', $user3);
        $this->setReference('user-4', $user4);
        $this->setReference('user-8', $user8);
        $this->setReference('user-9', $user9);
        $this->setReference('user-10', $user10);
        $this->setReference('user-11', $user11);
        $this->setReference('user-12', $user12);
        $this->setReference('user-13', $user13);
        $this->setReference('user-14', $user14);
        $this->setReference('user-15', $user15);
        $this->setReference('user-16', $user16);
        $this->setReference('userInTeam1', $userInTeam1);
    }

    public function getOrder()
    {
        return 4;
    }
}
