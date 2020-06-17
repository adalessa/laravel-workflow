<?php

namespace Brexis\LaravelWorkflow\Traits;

use Workflow;

/**
 * @author Boris Koumondji <brexis@yahoo.fr>
 */
trait WorkflowTrait
{
    public function workflowApply($transition, $workflow = null)
    {
        return Workflow::get($this, $workflow)->apply($this, $transition);
    }

    public function workflowCan($transition, $workflow = null)
    {
        return Workflow::get($this, $workflow)->can($this, $transition);
    }

    public function workflowTransitions($workflow = null)
    {
        return Workflow::get($this, $workflow)->getEnabledTransitions($this);
    }
}
