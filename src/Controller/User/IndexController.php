<?php

namespace App\Controller\User;

use App\Repository\PhotosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function mainPage(PhotosRepository $photosRepo)
    {
        $title = 'Кадровый Резерв';
        $photoMain = $photosRepo->findOneBy(['id' =>'17']);
        $showPic = $photoMain->getThumbnail();

        $whiteLine = $photosRepo->findOneBy(['id' =>'18']);
        $showPic2 = $whiteLine->getThumbnail();

        $picWhite = $photosRepo->findOneBy(['id' =>'19']);
        $showPic3 = $picWhite->getThumbnail();

        $picRedArrow = $photosRepo->findOneBy(['id' =>'20']);
        $showPic4 = $picRedArrow->getThumbnail();

        $picBlackBook = $photosRepo->findOneBy(['id' =>'21']);
        $showPic5 = $picBlackBook->getThumbnail();

        $picWhiteHorizontalLine = $photosRepo->findOneBy(['id' =>'22']);
        $showPic6 = $picWhiteHorizontalLine->getThumbnail();

        $picFinger = $photosRepo->findOneBy(['id' =>'23']);
        $showPic7 = $picFinger->getThumbnail();

        $picYellowSign = $photosRepo->findOneBy(['id' =>'24']);
        $showPic8 = $picYellowSign->getThumbnail();

        $picEagle = $photosRepo->findOneBy(['id' =>'25']);
        $showPic9 = $picEagle->getThumbnail();

        $picWhiteBook = $photosRepo->findOneBy(['id' =>'26']);
        $showPic10 = $picWhiteBook->getThumbnail();

        $picPlayButton = $photosRepo->findOneBy(['id' =>'27']);
        $showPic11 = $picPlayButton->getThumbnail();

        $picSynergyTeam = $photosRepo->findOneBy(['id' =>'28']);
        $showPic12 = $picSynergyTeam->getThumbnail();

        $greta = $photosRepo->findOneBy(['id' =>'29']);
        $showPic13 = $greta->getThumbnail();

        $plokhih = $photosRepo->findOneBy(['id' =>'30']);
        $showPic14 = $plokhih->getThumbnail();

        $zaycev = $photosRepo->findOneBy(['id' =>'31']);
        $showPic15 = $zaycev->getThumbnail();

        $shaldina = $photosRepo->findOneBy(['id' =>'32']);
        $showPic16 = $shaldina->getThumbnail();

        $skorobogatov = $photosRepo->findOneBy(['id' =>'33']);
        $showPic17 = $skorobogatov->getThumbnail();

        return $this->render('index.html.twig', [
            'title' => $title,
            'image1' => $showPic,
            'image2' => $showPic2,
            'image3' => $showPic3,
            'image4' => $showPic4,
            'image5' => $showPic5,
            'image6' => $showPic6,
            'image7' => $showPic7,
            'image8' => $showPic8,
            'image9' => $showPic9,
            'image10' => $showPic10,
            'image11' => $showPic11,
            'image12' => $showPic12,
            'image13' => $showPic13,
            'image14' => $showPic14,
            'image15' => $showPic15,
            'image16' => $showPic16,
            'image17' => $showPic17,
        ]);
    }
}