<?php
/**
 * Created by PhpStorm.
 * User: compaq
 * Date: 22/02/2015
 * Time: 6:37
 */
Class ShopController extends StoreController{

    public function actionIndex(){
        $this->render('index');
    }

    public function actionProducts(){
        $this->render('products');
    }

    public function actionCategories(){
        $this->render('categories');
    }

    public function actionSingleproduct(){
        $this->render('single_product');
    }

    public function actionCart(){
        $this->render('/cart/index');
    }

    public function actionCheckout(){
        $this->render('/cart/checkout');
    }
	
	
	public function actionAbc(){
		exit('test');			
	}

} 