<?php
class SiteController extends StoreController
{
	public $blog_read=false;
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
		
			'resized' => array(
				'class' => 'ext.resizer.ResizerAction',
				'options' => array(
					// Tmp dir to store cached resizedimages
					'cache_dir' => Yii::getPathOfAlias('webroot') . '/assets/uploads/images/_thumbs/', 
					// Web root dir to search images from
					'base_dir' => Yii::getPathOfAlias('webroot') . '/',
				)
			),
		
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
                'foreColor'=>0xFFFFFF,
				'backColor'=>0x000000,
                'maxLength'=>5,
                'minLength'=>3,
                //'height'=>'21',
                //'width'=>'56',
                'offset'=>1,
                'testLimit'=>2,
                'fontFile'=>Yii::getPathOfAlias('webroot').'/assets/fonts/djb/DJB_Me_and_My_Shadow_Light.ttf',
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex($slug='')
	{
		/*
		$data = array(
			'contact'=>array(
				'description'=>'',
				'address'=>'',
				'email'=>'',
				'skype'=>'',
				'mobile'=>'',
			),
		);
		
		exit(json_encode($data));
		*/
		//home/landing page
		if(empty($slug)){
			$this->render('index');
			exit;
		}
        if($slug=='contact'){
            $this->Contact();
            exit;
        }
        if($slug=='blog'){
            $this->Blog();
            exit;
        }
        if($slug=='portfolio'){
            $this->Portfolio();
			exit;
        }
		$page = $this->getPagebySlug($slug);
		//page banner
		$banner = json_decode($page->page_banners);
		$banner = $banner->banner;
		//end page banner
		if(!empty($page)){
			$this->Website->seoPage($page);
			$this->render('blank_page',array('page'=>$page,'banner'=>$banner));
			exit;
		}
	}
	
	public function actionBlogcategory($slug){
		$category = $this->getNewsCategorybySlug($slug);
		/*criteria order by*/
		$criteria = new CDbCriteria( array(
			'order' => 'news_date DESC',
			'condition'=>'category_id LIKE :criteria',
			'params'=>array(
					':criteria'=>"%{$category->category_id}%"
			    )
		    )
		);
		/*hitung jumlah data*/
		$count = SBNews::model() -> count($criteria);
		/*panggil class page*/
		$pages = new CPagination($count);
		/*jumlah data per page*/
		$pages -> pageSize = 20;
		$pages -> applyLimit($criteria);
		/* dapatkan semua data produk */
		$Posts = SBNews::model() -> findAll($criteria);
		/* kemudian render ke indexproduk
		 * dengan dataproduk membawa data dari $dataProcuk dan
		 * data paging $pages*/
		$banner = SBModule::model()->findByPk(3); 
		$this->Website->seoBlogCategory($category);
        $this->render('blog',array(
        	'Category'=>$category,
			'Posts' => $Posts, 
			'Pages' => $pages,
			'banner'=> $banner
		));
		//$this->render('blog-category');
	}

    public function Blog(){
    	/*criteria order by*/
		$criteria = new CDbCriteria( array('order' => 'news_date DESC'));
		/*hitung jumlah data*/
		$count = SBNews::model() -> count($criteria);
		/*panggil class page*/
		$pages = new CPagination($count);
		/*jumlah data per page*/
		$pages -> pageSize = 20;
		$pages -> applyLimit($criteria);
		/* dapatkan semua data produk */
		$Posts = SBNews::model() -> findAll($criteria);
		/* kemudian render ke indexproduk
		 * dengan dataproduk membawa data dari $dataProcuk dan
		 * data paging $pages*/
		$banner = SBModule::model()->findByPk(3);
        $this->render('blog',array(
			'Posts' => $Posts, 
			'Pages' => $pages,
			'banner'=> $banner,
		));
    }
	
	public function actionBlogread($id){
		$Post = $this->getNewsbyId($id);
		$this->Website->seoPost($Post);
        $PostNextID = $this->nextIDnews($id);
		$PostPrevID = $this->prevIDnews($id);
		$banner = SBModule::model()->findByPk(2);
		$this->blog_read=true;
        $this->render('blog-read',array(
        	'post'=>$Post,
        	'next'=>$PostNextID,
        	'prev'=>$PostPrevID,
        	'banner'=>$banner,
		));
    }

    public function Portfolio(){
    	/*criteria order by*/
		$criteria = new CDbCriteria( array('order' => 'gallery_id DESC'));
		/*hitung jumlah data*/
		$count = SBGallery::model() -> count($criteria);
		/*panggil class page*/
		$pages = new CPagination($count);
		/*jumlah data per page*/
		$pages -> pageSize = 20;
		$pages -> applyLimit($criteria);
		/* dapatkan semua data produk */
		$Images = SBGallery::model() -> findAll($criteria);
		
		//banner
		$banner = SBModule::model()->findByPk(2);
        $this->render('portfolio',array(
			'Images' => $Images, 
			'banner'=>$banner,
			'Pages' => $pages,
		));   
    }
	
	public function actionPortfoliosingle($id){
		$Portfolio = $this->getGalleryById($id);
		$this->render('portfolio-single',array('portfolio'=>$Portfolio));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	
	protected function nextIDnews($id){
		if($id<$this->maxIDnews()){
			$idNext = $id+1;
			$MaidNext = SBNews::model()->findByPk($id+1);
			if(empty($MaidNext)){
				$i=$idNext;	
				while(empty($MaidNext)){
					$MaidNext2 = SBNews::model()->findByPk($i);
					if(!empty($MaidNext2)){
						 return $nextID = $MaidNext2->news_id;
					}
					$i++;
				}
			}else{
				return $nextID = $MaidNext->news_id;
			}
		}else{
			return $this->minIDnews();
		}
	}
	
	protected function prevIDnews($id){
		if($id>$this->minIDnews()){
			$idNext = $id-1;
			$MaidNext = SBNews::model()->findByPk($id-1);
			if(empty($MaidNext)){
				$i=$idNext;	
				while(empty($MaidNext)){
					$MaidNext2 = SBNews::model()->findByPk($i);
					if(!empty($MaidNext2)){
						 return $nextID = $MaidNext2->news_id;
					}
					$i--;
				}
			}else{
				return $nextID = $MaidNext->news_id;
			}
		}else{
			return $this->maxIDnews();
		}
	}
	
	protected function maxIDnews(){
		return Yii::app()->db->createCommand("SELECT MAX(news_id) FROM sb_news")->queryScalar();
	}
	protected function minIDnews(){
		return Yii::app()->db->createCommand("SELECT MIN(news_id) FROM sb_news")->queryScalar();
	}
	
	/*module for action*/
	public function actionSubscribeemail(){
		$this->forceAjaxRequest();
		$model = New SBEmail;
		if(isset($_POST['SBEmail'])){
			$model -> attributes = $_POST['SBEmail'];
			$model -> note = 'from ostar news letter subscribe email';
			$model -> type = 'newsletter';
			if($model->validate()){
				if($model->save()){
					exit(json_encode(array('success'=>true,'message'=>'Email anda telah diregistrasi, terima kasih!')));
				}
			}else{
				exit(CActiveForm::validate($model));
			}
		}
	}
	
	/*module for action*/
	public function actionPutproject(){
		$this->forceAjaxRequest();
		$model = New OSPutProject;
		if(isset($_POST['OSPutProject'])){
			$model -> attributes = $_POST['OSPutProject'];
			if($model->validate()){
				if($model->save()){
					exit(json_encode(array('success'=>true,'message'=>'Tawaran project anda telah terkirim, dan kami akan menghubungi anda, dan melakukan negosiasi. terima kasih!')));
				}
			}else{
				exit(CActiveForm::validate($model));
			}
		}
	}
	
}
