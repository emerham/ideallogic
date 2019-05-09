<?php
/**
 * @file
 * idealogic courses page template.
 */
?>

<?php foreach ($variables['items'] as $course): ?>
    <div class="course">
        <h2><?php print render($course['name']) ?></h2>
        <div class="programs">
          <?php foreach ($course['courses'] as $course_name => $courses): ?>
              <div class="course-name">
                  <h3><?php print render($course_name) ?></h3>
                  <p><?php print render($courses['brief_description']) ?></p>
                  <div class="sections">
                    <?php foreach ($courses['section'] as $section): ?>
                        <div class="section">
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
              </div>
          <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>

