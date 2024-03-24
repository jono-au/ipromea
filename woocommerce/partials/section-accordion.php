
<section class="container-fluid accordion-section">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <div class="accordion accordion-flush" id="accordion">
          <div class="accordion-item">
            <p class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Ingredients
              </button>
            </p>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php the_sub_field('ingredients') ?></div>
            </div>
          </div>
          <div class="accordion-item">
            <p class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Suggested use
              </button>
            </p>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php the_sub_field('suggested_use') ?></div>
            </div>
          </div>
          <div class="accordion-item">
            <p class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Cautions
              </button>
            </p>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php the_sub_field('cautions') ?></div>
            </div>
          </div>
          <div class="accordion-item">
            <p class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Storage
              </button>
            </p>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php the_sub_field('storage'); ?></div>
            </div>
          </div>
          <div class="accordion-item">
            <p class="accordion-header" id="flush-headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                Nutritional information
              </button>
            </p>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php the_sub_field('nutritional_information'); ?></div>
            </div>
          </div>
          <div class="accordion-item">
            <p class="accordion-header" id="flush-headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                Size chart: dosage/meal
              </button>
            </p>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php the_sub_field('size_chart:_dosagemeal'); ?></div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</section>



