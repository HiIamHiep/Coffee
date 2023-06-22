<?php

require 'controller/Controller.php';
require 'controller/UserController.php';

//    $uri = $_GET[$_SERVER['REQUEST_URI']] ?? '/';
//    $uri = $_SERVER['REQUEST_URI'] ?? '/';

$controller = $_GET['controller'] ?? 'base';
$action = $_GET['action'] ?? '';

switch ($controller) {
    case 'base':
        (new Controller())->index();
        break;

    case 'signin':
        switch ($action) {
            case '':
                (new Controller())->signin();
                break;

            case 'dosignin':
                (new UserController())->dosignin();
                break;

            default:
                echo "Đừng truyền action lạ";
                break;
        }
        break;

    case 'signup':
        switch ($action) {
            case '':
                (new Controller())->signup();
                break;
            case 'dosignup':
                (new UserController())->dosignup();
                break;

            default:
                echo "Đừng truyền action lạ";
                break;
        }
        break;

    case 'signout':
        (new UserController())->signout();
        break;

    case 'profile':
        (new UserController())->profile();
        break;

    case 'update_profile':
        (new UserController())->update_profile();
        break;

    case 'customer_order':
        (new Controller())->customer_order();
        break;

    case 'product':
        (new Controller())->product();
        break;

    case 'detail_product':
        if (empty($_GET['id'])) {
            header('location : 404');
        }
        (new Controller())->detail_product();
        break;

    case 'add_to_cart':
        (new Controller())->add_to_cart();
        break;

    case 'update_quantity':
        (new Controller())->update_quantity_in_cart();
        break;

    case 'delete_product':
        (new Controller())->delete_product_in_cart();
        break;

    case 'view_cart':
        (new Controller())->view_cart();
        break;

    case 'checkout':
        (new Controller())->checkout();
        break;

    case 'admin':
        switch ($action) {
            case '':
                (new Controller())->admin();
                break;
            case 'customer':
                (new Controller())->customer();
                break;
            case 'detail_customer':
                (new Controller())->detail_customer();
                break;
            case 'create_customer':
                (new Controller())->create_customer();
                break;
            case 'store_customer':
                (new Controller())->store_customer();
                break;
            case 'edit_customer':
                (new Controller())->edit_customer();
                break;
            case 'update_customer':
                (new Controller())->update_customer();
                break;
            case 'delete_customer':
                (new Controller())->delete_customer();
                break;
            case 'manufacturer':
                (new Controller())->manufacturer();
                break;
            case 'create_manufacturer':
                (new Controller())->create_manufacturer();
                break;
            case 'store_manufacturer':
                (new Controller())->store_manufacturer();
                break;
            case 'edit_manufacturer':
                (new Controller())->edit_manufacturer();
                break;
            case 'update_manufacturer':
                (new Controller())->update_manufacturer();
                break;
            case 'delete_manufacturer':
                (new Controller())->delete_manufacturer();
                break;
            case 'products':
                (new Controller())->products();
                break;
            case 'detail_products':
                (new Controller())->detail_products();
                break;
            case 'create_product':
                (new Controller())->create_product();
                break;
            case 'store_product':
                (new Controller())->store_product();
                break;
            case 'edit_product':
                (new Controller())->edit_product();
                break;
            case 'update_product':
                (new Controller())->update_product();
                break;
            case 'delete_product':
                (new Controller())->delete_product();
                break;
            case 'order':
                (new Controller())->order();
                break;
            case 'order_detail':
                (new Controller())->order_detail();
                break;
            case 'confirm_order':
                (new Controller())->confirm_order();
                break;
        }
        break;

    default:

        if (empty($_GET['id'])) {
            header('location : 404');
        }
        return false;
        break;
}