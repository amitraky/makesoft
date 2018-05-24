<?php 

    // remove all blank value in array
	function panel($color=null,$icon=null,$num=null,$text=null)
	{
	 
		echo '
                      <section class="panel">
                          <div class="symbol '.$color.'">
                              <i class="icon-'.$icon.'"></i>
                          </div>
                          <div class="value">
                              <h1 class="counts">
                                  '.$num.'
                              </h1>
                              <p>'.$text.'</p>
                          </div>
                      </section>
                 ';
	}
	
	