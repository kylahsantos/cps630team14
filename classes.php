<?php
   	 class home {
   		 public $place_id;
   		 public $placename;
   		 public $placelocation;
   		 public $mainimage;

   		 public function __construct($place_id, $placename, $placelocation, $mainimage)
   		 {
   			 $this->place_id = $place_id;
   			 $this->placename = $placename;
   			 $this->placelocation = $placelocation;
   			 $this->mainimage;
   		 }

       public function __toString() {
        $tag = '<a href="detail.php?id=' . $this->place_ID . '" class="img-responsive">';
        $tag .= '<img src="' . $this->mainimage . '" title="' . $this->placename . '" alt="' . $this->placename . '" >';
        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->placelocation .
                    '</h1></div></div></a>';
      return $tag;
   }
   	 }

   	 class travelInfo {
   		 public $place_id;
   		 public $place_name;
   		 public $photo1;
   		 public $photo2;
   		 public $photo3;
   		 public $place_desc;

   		 public function __construct($place_id, $place_name, $photo1, $photo2, $photo3, $place_desc)
   		 {
   			 $this->place_id = $place_id;
   			 $this->place_name = $place_name;
   			 $this->photo1 = $photo1;
   			 $this->photo2 = $photo2;
   			 $this->photo3 = $photo3;
   			 $this->place_desc = $place_desc;
   		 }
       public function __toString() {
        $tag = '<a href="detail.php?id=' . $this->place_ID . '" class="img-responsive">';
        $tag .= '<img src="' . $this->photo1 . '" title="' . $this->place_name . '" alt="' . $this->placename . '" >';
        $tag .= '<img src="' . $this->photo2 . '" title="' . $this->place_name . '" alt="' . $this->placename . '" >';
        $tag .= '<img src="' . $this->photo3 . '" title="' . $this->place_name . '" alt="' . $this->placename . '" >';
        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->place_desc .
                    '</h1></div></div></a>';
                  }
                  return $tag;

   	 }


   	 class review {
   		 public $place_id;
   		 public $rev_name;
   		 public $rev_date:
   		 public $review;

   		 public function __construct($place_id, $rev_name, $rev_date, review)
   		 {
   			 $this->place_id = place_id;
   			 $this->rev_name = rev_name;
   			 $this->rev_date = rev_date;
   			 $this->review = review
   		 }

       public function __toString() {
        $tag = '<a href="detail.php?id=' . $this->place_id . '" class="img-responsive">';

        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->rev_name .
                    '</h1></div></div></a>';
        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->rev_date .
                    '</h1></div></div></a>';
                    $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->review .
                                '</h1></div></div></a>';
                                return $tag;
                  }


   	 }

   	 class closedistances {
   		 public $attID;
   		 public $placeA;
   		 public $placeB;
   		 public $imageA;
   		 public $imageB;
   		 public $locA;
   		 public $locB;
   		 public $place_id;

   		 public function __construct($attID, $placeA, $placeB, $imageA, $imageB, $locA, $locB, $place_id)
   		 {
   			 $this->attID = $attID;
   			 $this->placeA = $placeA;
   			 $this->placeB = $placeB;
   			 $this->imageA = $imageA;
   			 $this->imageB = $imageB;
   			 $this->locA = $locA;
   			 $this->locB = $locB;
   			 $this->place_id = place_id;
   		 }
       public function __toString() {
        $tag = '<a href="detail.php?id=' . $this->attID . '" class="img-responsive">';

        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->placeA .
                    '</h1></div></div></a>';
                    $tag .= '<img src="' . $this->photo1 . '" title="' . $this->place_name . '" alt="' . $this->imageA . '" >';
                    $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->locA .
                                '</h1></div></div></a>';
        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->placeB .
                    '</h1></div></div></a>';
                    $tag .= '<img src="' . $this->photo1 . '" title="' . $this->place_name . '" alt="' . $this->imageB . '" >';

                    $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->locB .
                                '</h1></div></div></a>';
                                return $tag;
                  }
   	 }

   	 class landmarks {
   		 public $place_id;
   		 public $placename;
   		 public $placelocation;
   		 public $mainimage;

   		 public function __construct($place_id, $placename, $placelocation, $mainimage){
   			 $this->place_id = $place_id;
   			 $this->placename = $placename;
   			 $this->placelocation = $placelocation;
   			 $this->mainimage = $mainimage;
   		 }
       public function __toString() {
        $tag = '<a href="detail.php?id=' . $this->place_id . '" class="img-responsive">';
        $tag .= '<img src="' . $this->mainimage . '" title="' . $this->placename . '" alt="' . $this->placename . '" >';
        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->placelocation .
                    '</h1></div></div></a>';
      return $tag;
    }
   	 }

   	 class museums {
   		 public $place_id;
   		 public $placename;
   		 public $placelocation;
   		 public $mainimage;

   		 public function __construct($place_id, $placename, $placelocation, $mainimage){
   			 $this->place_id = $place_id;
   			 $this->placename = $placename;
   			 $this->placelocation = $placelocation;
   			 $this->mainimage = $mainimage;
   		 }
       public function __toString() {
        $tag = '<a href="detail.php?id=' . $this->place_id . '" class="img-responsive">';
        $tag .= '<img src="' . $this->mainimage . '" title="' . $this->placename . '" alt="' . $this->placename . '" >';
        $tag .= '<div class="caption"><div class="blur"></div><div class="caption-text"><h1>' . $this->placelocation .
                    '</h1></div></div></a>';
      return $tag;
    }
   	 }

    	?>
