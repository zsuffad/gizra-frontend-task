<?php

declare(strict_types=1);


namespace Drupal\server_general;

/**
 * Helper methods for rendering Person Card type.
 *
 * The Peson card is used as representation of people.
 */
trait PersonCardTrait {

  /**
   * Build "Person Card".
   *
   * @param array $image
   *   The profile picture.
   * @param string $name
   *   The name of user.
   * @param string $position
   *   The position of user.
   * @param string $role
   *   The role of user.
   * @param string $emailaddress
   *   User's email address.
   * @param string $phonenumber
   *   User's phone number.
   *
   * @return array
   *   Render array.
   */
  protected function buildPersonCard(array $image, string $name, string $position, string $role, string $emailaddress, string $phonenumber,): array {

    return [
      '#theme' => 'server_theme_person_card',
      '#image' => $this->wrapRoundedCornersFull($image),
      '#name' => $name,
      '#position' => $position,
      '#userrole' => $role,
      '#emailaddress' => $emailaddress,
      '#phonenumber' => $phonenumber,
    ];
  }

  /**
   * Wrap multiple cards with a grid.
   *
   * @param array $items
   *   The elements as render array.
   *
   * @return array
   *   Render array.
   */
  protected function buildPersonCards(array $items): array {
    return [
      '#theme' => 'server_theme_person_cards',
      '#items' => $items,
    ];
  }

}
