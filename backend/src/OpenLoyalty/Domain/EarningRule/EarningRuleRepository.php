<?php
/**
 * Copyright © 2017 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */
namespace OpenLoyalty\Domain\EarningRule;

interface EarningRuleRepository
{
    public function byId(EarningRuleId $earningRuleId);

    public function findAll();

    public function findByCustomEventName($eventName);

    public function findAllActive(\DateTime $date = null);

    public function findAllActiveEventRules($eventName = null, \DateTime $date = null);

    public function findAllPaginated($page = 1, $perPage = 10, $sortField = null, $direction = 'DESC');

    public function countTotal();

    public function save(EarningRule $earningRule);

    public function remove(EarningRule $earningRule);

    public function isCustomEventEarningRuleExist($eventName, $currentEarningRuleId = null);
}
