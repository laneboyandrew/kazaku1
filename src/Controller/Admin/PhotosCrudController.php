<?php

namespace App\Controller\Admin;

use App\Entity\Photos;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PhotosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photos::class;
    }


    public function configureFields(string $pageName): iterable
    {
        $imageFile = ImageField::new('thumbnailFile')->setFormType(VichImageType::class);
        $image = ImageField::new('thumbnail')->setBasePath('/images/thumbnails');
        $fields = [
            IdField::new('id'),
            TextEditorField::new('text'),
        ];

        if($pageName == Crud::PAGE_INDEX || $pageName == Crud::PAGE_DETAIL){
            $fields[] = $image;
        } else {
            $fields[] = $imageFile;
        }
        return $fields;
    }
}
