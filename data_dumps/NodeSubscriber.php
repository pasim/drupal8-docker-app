<?php

namespace Drupal\traning\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Class NodeSubscriber.
 */
class NodeSubscriber implements EventSubscriberInterface {

  /**
   * Drupal\Core\Entity\EntityTypeManagerInterface definition.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs a new NodeSubscriber object.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events['traning_events_node_presave'] = ['traningEventsNodePresave'];

    return $events;
  }

  /**
   * This method is called when the traning_events_node_presave is dispatched.
   *
   * @param \Symfony\Component\EventDispatcher\Event $event
   *   The dispatched event.
   */
  public function traningEventsNodePresave(Event $event) {
    if (true) {
      \Drupal::messenger()->addMessage('Event traning_events_node_presave thrown by Subscriber in module traning.', 'status', TRUE);
    }
  }

}
