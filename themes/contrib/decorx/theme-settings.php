<?php

/**
 * @file
 * Decorx theme settings.
 */

use Drupal\file\Entity\File;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */

function decorx_form_system_theme_settings_alter(&$form, FormStateInterface $form_state)
{
  // SlideShow
  $form['decorx_info'] = [
    '#markup' => '<h2><br/>Advanced theme settings</h2><div class="messages messages--warning">Clear cache after making any changes in theme settings. <a href="../../config/development/performance">Click here to clear cache</a></div>',
  ];
  $form['decorx_settings']['slideshow'] = [
    '#type' => 'details',
    '#title' => t('Front Page Slider'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['decorx_settings']['slideshow']['no_of_slides'] = [
    '#type' => 'textfield',
    '#title' => t('Number of slides'),
    '#default_value' => theme_get_setting('no_of_slides'),
    '#description'  => t("Enter the number of slides required & Save configuration."),
    '#markup' => '<div class="messages messages--warning">Clear caches after making any changes in theme settings. <a href="../../config/development/performance">Click here to clear cache</a></div>',
  ];
  $form['decorx_settings']['slideshow']['show_slideshow'] = [
    '#type' => 'checkbox',
    '#title' => t('Show Slideshow'),
    '#default_value' => theme_get_setting('show_slideshow'),
    '#description'   => t("Show/hide slideshow in home page."),
  ];
  $form['decorx_settings']['slideshow']['slide'] = [
    '#markup' => t('Change the banner video, title, description and link using below fieldset.'),
  ];
  for ($i = 1; $i <= theme_get_setting('no_of_slides'); $i++) {
    $form['decorx_settings']['slideshow']['slide' . $i] = [
      '#type' => 'details',
      '#title' => t('Slide ' . $i),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    ];
    $form['decorx_settings']['slideshow']['slide' . $i]['slide_video' . $i. '_video'] = [
      '#type' => 'managed_file',
      '#title' => t('Slide ' . $i . ' Video'),
      '#default_value' => theme_get_setting('slide_video' . $i . '_video', 'decorx'),
      '#upload_location' => 'public://',
      '#upload_validators' => array(
        'file_validate_extensions' => array('gif png jpg jpeg svg, mp4'),
      ),
    ];

    $form['decorx_settings']['slideshow']['slide' . $i]['slide_title_' . $i] = [
      '#type' => 'textfield',
      '#title' => t('Slide ' . $i . ' Title'),
      '#default_value' => theme_get_setting('slide_title_' . $i, 'decorx'),
    ];
    $form['decorx_settings']['slideshow']['slide' . $i]['slide_description_' . $i] = [
      '#type' => 'textarea',
      '#title' => t('Slide ' . $i . ' Description'),
      '#default_value' => theme_get_setting('slide_description_' . $i, 'decorx'),
    ];


    // Scroll to top.
    $form['decorx_settings']['scrolltotop'] = [
      '#type'        => 'details',
      '#title'       => t('Scroll To Top'),
    ];

    $form['decorx_settings']['scrolltotop']['scrolltotop_on'] = [
      '#type'          => 'checkbox',
      '#title'         => t('Enable scroll to top feature.'),
      '#default_value' => theme_get_setting('scrolltotop_on', 'decorx'),
      '#description'   => t("Check this option to enable scroll to top feature. Uncheck to disable this fearure and hide scroll to top icon."),
    ];

    // Footer Social Icon Link.
    $form['decorx_settings']['social_share_icon'] = [
      '#type' => 'details',
      '#title' => t('Social Icons Links'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['decorx_settings']['social_share_icon']['show_social_icons'] = [
      '#type' => 'checkbox',
      '#title' => t('Show Social Icons'),
      '#default_value' => theme_get_setting('show_social_icons'),
      '#description'   => t("Show/hide Social media links."),
    ];
    $form['decorx_settings']['social_share_icon']['twitter_url'] = [
      '#type' => 'textfield',
      '#title' => t('Twitter URL'),
      '#default_value' => theme_get_setting('twitter_url'),
    ];
    $form['decorx_settings']['social_share_icon']['facebook_url'] = [
      '#type' => 'textfield',
      '#title' => t('Facebook URL'),
      '#default_value' => theme_get_setting('facebook_url'),
    ];
    $form['decorx_settings']['social_share_icon']['instagram_url'] = [
      '#type' => 'textfield',
      '#title' => t('Instagram URL'),
      '#default_value' => theme_get_setting('instagram_url'),
    ];
    $form['decorx_settings']['social_share_icon']['linkedin_url'] = [
      '#type' => 'textfield',
      '#title' => t('LinkedIn URL'),
      '#default_value' => theme_get_setting('linkedin_url'),
    ];
    $form['decorx_settings']['copyright'] = [
      '#type' => 'details',
      '#title' => t('Copyright'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['decorx_settings']['copyright']['show_copyright'] = [
      '#type' => 'checkbox',
      '#title' => t('Show Copyright text'),
      '#default_value' => theme_get_setting('show_copyright'),
      '#description'   => t("Check this option to show Copyright text. Uncheck to hide."),
    ];

    $form['decorx_settings']['copyright']['copyright_text'] = [
      '#type' => 'textfield',
      '#title' => t('Enter copyright text'),
      '#default_value' => check_markup(theme_get_setting('copyright_text'), 'full_html')
    ];

    // Footer Section.
    $form['decorx_settings']['footer_section'] = [
      '#type' => 'details',
      '#title' => t('Footer Section'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['decorx_settings']['footer_section']['about'] = [
      '#type' => 'details',
      '#title' => t('About'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['decorx_settings']['footer_section']['about']['about_title'] = [
      '#type' => 'textfield',
      '#title' => t('About Title'),
      '#default_value' => theme_get_setting('about_title')
    ];
    $form['decorx_settings']['footer_section']['about']['about_description'] = [
      '#type' => 'textarea',
      '#title' => t('About description'),
      '#default_value' => check_markup(theme_get_setting('about_description'), 'full_html')
    ];
    $form['decorx_settings']['footer_section']['contact'] = [
      '#type' => 'details',
      '#title' => t('Contact'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['decorx_settings']['footer_section']['contact']['contact_title'] = [
      '#type' => 'textfield',
      '#title' => t('Contact Title'),
      '#default_value' => theme_get_setting('contact_title')
    ];
    $form['decorx_settings']['footer_section']['contact']['contact_description'] = [
      '#type' => 'textarea',
      '#title' => t('Contact description'),
      '#default_value' => check_markup(theme_get_setting('contact_description'), 'full_html')
    ];

    // Footer Newsletter.
    $form['footer_newsletter'] = [
      '#type' => 'details',
      '#title' => t('Newsletter'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['footer_newsletter']['footer_newsletter_on'] = [
      '#type' => 'checkbox',
      '#title' => t('Show Newsletter'),
      '#default_value' => theme_get_setting('footer_newsletter_on'),
      '#description'   => t("Show/Hide Subscribe Form"),
    ];

    //Make the uploaded videos permanent.
    $video_slide = theme_get_setting('slide_video' . $i. '_video', 'decorx');
    if (!empty($video_slide)) {
      $file = File::load($video_slide[0]);
      $file->setPermanent();
      $file->save();
      $file_usage = \Drupal::service('file.usage');
      $file_usage_check = $file_usage->listUsage($file);
      if (empty($file_usage_check)) {
        $file_usage->add($file, 'decorx', 'theme', $video_slide[0]);
      }
    }
  }
}
