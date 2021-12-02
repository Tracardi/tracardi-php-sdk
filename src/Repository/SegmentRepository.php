<?php

namespace Tracardi\TracardiPhpSdk\Repository;

use Tracardi\TracardiPhpSdk\Model\Segment\Segment;
use Tracardi\TracardiPhpSdk\Model\Segment\SegmentListView;
use Tracardi\TracardiPhpSdk\Request\Segment\SegmentInfoRequest;
use Tracardi\TracardiPhpSdk\Request\Segment\SegmentListRequest;

class SegmentRepository extends RepositoryBase {

  /**
   * @param string $id
   *
   * @return \Tracardi\TracardiPhpSdk\Model\Segment\Segment
   * @throws \Exception
   */
  public function getSegment(string $id): Segment {
    $request = new SegmentInfoRequest($id);

    return $this->handleRequest(
      $request,
      Segment::class
    );
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Segment\SegmentListView
   */
  public function listSegments(): SegmentListView {
    $request = new SegmentListRequest();

    return $this->handleRequest(
      $request,
      SegmentListView::class
    );
  }

}
