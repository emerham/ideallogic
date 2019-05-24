<?php

/**
 * @file
 * Idealogic courses page template.
 */
?>
<?php
drupal_set_title($variables['items']['program name']);
?>
<?php foreach ($variables['items']['courses'] as $course): ?>
    <div class="ideallogic-course">
        <h3><?php print render($course['name']) ?></h3>
        <div class="ideallogic-courses">
          <?php foreach ($course['courses'] as $course_name => $courses): ?>
              <div class="ideallogic-course-items">
                  <h4><?php print render($course_name) ?></h4>
                  <div class="ideallogic-section-count">
                          <span class="ideallogic-section-count-number">
                            <?php print count($courses['section']) ?>
                          </span>
                      Sessions Available
                  </div>
                  <p><?php print render($courses['brief_description']) ?></p>
                  <div class="ideallogic-sections">
                    <?php foreach ($courses['section'] as $section): ?>
                        <div class="ideallogic-section-items">
                            <div class="start-date">
                                <div class="start-month">
                                  <?php print render($section['start_date_month']) ?>
                                </div>
                                <div class="start-day">
                                  <?php print render($section['start_date_day']) ?>
                                </div>
                            </div>
                            <div class="start-end-time">
                              <?php print render($section['start_date_time']) ?>
                                - <?php print render($section['end_date_time']) ?>
                            </div>
                          <?php if (!empty($section['section_slots'])): ?>
                              <div class="section-slots">
                                <?php print render($section['section_slots_remaining']) ?>
                                  of
                                <?php print render($section['section_slots']) ?>
                                  Seats
                                  remaining.
                              </div>
                          <?php endif ?>
                          <?php print render($section['registration_url']) ?>
                        </div>
                    <?php endforeach; ?>
                  </div>
                  <button class="ideallogic-session-toggle">See Sessions and Register</button>
              </div>
          <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>
