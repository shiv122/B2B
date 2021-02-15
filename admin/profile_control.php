<?php
include 'dbcon.php';

?>
<?php
session_start();




switch ($_GET['name']) {
	case 'edit':
		$_SESSION['the_user']=$_GET['id'];
		header("Location: edit_user.php");
		break;

		case 'view':
		$_SESSION['the_user']=$_GET['id'];
         header("Location: panel-page-profile.php");
         break;

        case 'profile':
        //echo "hello";
        $_SESSION['the_user']=$_GET['id'];

       
         header("Location: panel-page-profile.php");
        	break;

        case 'product':
        //echo "hello";
        $_SESSION['product']=$_GET['id'];

       
         header("Location: edit_product.php");
        	break;

        case 'del':
        	 $_SESSION['del']=$_GET['id'];

             header("Location: product_del.php");

        	break;

        case 'delete':
        	
        	$_SESSION['user_del']=$_GET['id'];
        	header("Location: user_del.php");

        	break;

        case 'cat_edit':
        	$_SESSION['cat_edit']=$_GET['id'];
        	header("Location: cat_edit.php");
        	break;

        case 'cat_delete':
        	$_SESSION['cat_delete']=$_GET['id'];
        	header("Location: cat_del.php");

        	break;
        case 'apr_product':
            $_SESSION['ap_pro']=$_GET['id'];
            header("Location: appr_product.php");

            break;

        case 'bl_product':
            $_SESSION['bl_pro']=$_GET['id'];
            header("Location: block_product.php");

            break;
         case 'apr_cat':
            $_SESSION['cat_apr']=$_GET['id'];
            header("Location: category_approve.php");

            break;
        case 'bl_cat':
            $_SESSION['cat_blc']=$_GET['id'];
            header("Location: category_block.php");

            break;
        case 'u_allow':
            $_SESSION['us_al']=$_GET['id'];
            header("Location: user_allow.php");

            break;

            case 'u_block':
            $_SESSION['us_bl']=$_GET['id'];
            header("Location: user_blocked.php");
                break;

            case 'order_appr':
                
            $_SESSION['order_ap']=$_GET['id'];
            header("Location: order_appr.php");
                break;
            case 'order_rej':
             $_SESSION['order_rj']=$_GET['id'];
            header("Location: order_rej.php");
                break;

            case 'seller_view':

            $_SESSION['seller_v']=$_GET['id'];
            header("Location: view_seller.php");
                # code...
                break;
            case 'appr_seller':
                $_SESSION['seller_appr']=$_GET['id'];
            header("Location: appr_seller.php");
                break;
            case 'seller_edit':
                $_SESSION['seller_edit']=$_GET['id'];
            header("Location: edit_seller.php");
                break;

                case 'buyer_view':

            $_SESSION['seller_v']=$_GET['id'];
            header("Location: view_seller.php");
                # code...
                break;
            
            case 'buyer_edit':
                $_SESSION['seller_edit']=$_GET['id'];
            header("Location: edit_seller.php");
                break;
            case 'msg_view':
                $_SESSION['msg_view']=$_GET['id'];
            header("Location: message_view.php");
                break;
            case 'msg_del':
                 $_SESSION['msg_del']=$_GET['id'];
            header("Location: message_del.php");
                break;
            case 'msg_rep':
                $_SESSION['msg_rep']=$_GET['id'];
                echo $_GET['id'];
            header("Location: compose.php");
                break;

 
 


		
	
	default:
	    echo "STOPPPP!!!!!!!!!!!!!!!!!!!!!!";
		echo "You wernt suppose to be here";
		break;
}





?>