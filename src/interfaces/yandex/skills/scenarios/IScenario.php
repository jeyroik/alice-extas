<?php
namespace extas\interfaces\yandex\skills\scenarios;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use extas\interfaces\yandex\calls\IAliceCall;
use extas\interfaces\yandex\responses\IAliceResponse;
use extas\interfaces\yandex\skills\IAliceSkill;

/**
 * Interface IScenario
 *
 * @package extas\interfaces\yandex\skills\scenarios
 * @author jeyroik@gmail.com
 */
interface IScenario extends IItem, IHasName, IHasDescription
{
    const SUBJECT = 'alice.skill.scenario';

    const FIELD__SCHEMA = 'schema';
    const FIELD__SKILL_NAME = 'skill_name';

    const REACTION_X = 'message_x';

    /**
     * @param $messageId
     * @param IAliceCall $call
     * @param IAliceResponse $response
     *
     * @return void
     */
    public function play($messageId, IAliceCall $call, IAliceResponse &$response);

    /**
     * @return array
     */
    public function getSchema(): array;

    /**
     * @return string
     */
    public function getSkillName(): string;

    /**
     * @return IAliceSkill|null
     */
    public function getSkill(): ?IAliceSkill;

    /**
     * @param array $schema
     *
     * @return $this
     */
    public function setSchema(array $schema);

    /**
     * @param string $skillName
     *
     * @return $this
     */
    public function setSkillName(string $skillName);
}
