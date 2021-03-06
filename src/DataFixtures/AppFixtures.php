<?php

namespace App\DataFixtures;

use App\Entity\Location;
use App\Entity\Organization;
use App\Entity\Transaction;
use App\Entity\TransactionProduct;
use App\Entity\TransactionProductNew;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Uid\Uuid;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        $array_dates = [new \DateTime('yesterday'), new \DateTime('now'), new \DateTime('tomorrow')];

        $array_locations = [];
        for($i = 0; $i < 5; $i++) {
            /** @var Location $location */
            $location = new Location();
            $location->setName($faker->city);
            $location->setAddress($faker->streetName);
            $location->setFuelpassIdentifier($faker->word);
            $location->setSpinId($faker->randomNumber());
            $location->setUuid(Uuid::v4());
            $manager->persist($location);
            $array_locations[] = $location;
        }

        $array_organizations = [];
        for($i = 0; $i < 5; $i++) {
            /** @var Organization $organization */
            $organization = new Organization();
            $organization->setUuid(Uuid::v4());
            $organization->setFuelpassIdentifier($faker->word);
            $organization->setName($faker->company);
            $organization->setEmail($faker->companyEmail);
            $manager->persist($organization);
            $array_organizations[] = $organization;
        }

        $manager->flush();
        $manager->clear();

        for($i = 0; $i < 40000; $i++) {
            $transaction_product_id = $faker->randomNumber();
            $product_id = $faker->randomNumber();
            $transaction_product_name = $faker->words[1];
            $barcode = $faker->numberBetween(200, 500);
            $price = $faker->randomNumber(3);
            $quantity = $faker->randomDigitNotNull;
            $unit_type = $faker->randomDigitNotNull;
            $trans_id = $faker->randomNumber();
            $type = $faker->randomDigitNotNull;
            $status = $faker->randomDigitNotNull;
            $time = $array_dates[array_rand($array_dates)];
            $pos_id = $faker->randomNumber();
            $pos_name = $faker->colorName;
            $location = $array_locations[array_rand($array_locations)];
            $organization = $array_organizations[array_rand($array_organizations)];
            $ref = $faker->randomNumber();
            $user_id = $faker->randomNumber();
            $user_name = $faker->userName;
            $is_refund = $faker->boolean;

            /** @var TransactionProduct $transaction_product */
            $transaction_product = new TransactionProduct();
            $transaction_product->setProductId($product_id);
            $transaction_product->setName($transaction_product_name);
            $transaction_product->setBarcode($barcode);
            $transaction_product->setPrice($price);
            $transaction_product->setQuantity($quantity);
            $transaction_product->setUnitType($unit_type);

            /** @var Transaction $transaction */
            $transaction = new Transaction();
            $transaction->setTransId($trans_id);
            $transaction->setType($type);
            $transaction->setStatus($status);
            $transaction->setTime($time);
            $transaction->setPosId($pos_id);
            $transaction->setPosName($pos_name);
            $transaction->setLocationId($location->getId());
            $transaction->setOrganizationId($organization->getId());
            $transaction->setRef($ref);
            $transaction->setUserId($user_id);
            $transaction->setUserName($user_name);
            $transaction->setIsRefund($is_refund);
            $transaction->setTransactionProducts([$transaction_product]);

            $transaction_product->setTransaction($transaction);

            $manager->persist($transaction);
            $manager->persist($transaction_product);

            /** @var TransactionProductNew $transaction_product_new */
            $transaction_product_new = new TransactionProductNew();
            $transaction_product_new->setTransactionProductId($transaction_product_id);
            $transaction_product_new->setProductId($product_id);
            $transaction_product_new->setName($transaction_product_name);
            $transaction_product_new->setBarcode($barcode);
            $transaction_product_new->setPrice($price);
            $transaction_product_new->setQuantity($quantity);
            $transaction_product_new->setUnitType($unit_type);
            $transaction_product_new->setTransactionId($trans_id);
            $transaction_product_new->setTransId($trans_id);
            $transaction_product_new->setType($type);
            $transaction_product_new->setStatus($status);
            $transaction_product_new->setTime($time);
            $transaction_product_new->setPosId($pos_id);
            $transaction_product_new->setPosName($pos_name);
            $transaction_product_new->setLocationId($location->getId());
            $transaction_product_new->setLocationName($location->getName());
            $transaction_product_new->setOrganizationId($organization->getId());
            $transaction_product_new->setOrganizationName($organization->getName());
            $transaction_product_new->setRef($ref);
            $transaction_product_new->setUserId($user_id);
            $transaction_product_new->setUserName($user_name);
            $transaction_product_new->setIsRefund($is_refund);
            $manager->persist($transaction_product_new);

            if($i%100 == 0) {
                $manager->flush();
                $manager->clear();
            }
        }
        $manager->flush();
        $manager->clear();
    }
}
