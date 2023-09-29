<?php

namespace Vildanbina\LivewireWizard\Concerns;

trait HasHooks {

    /**
     * Call a hook if it exists.
     *
     * Here in this case we use the following hooks in the following order:
     * - On Mount:
     *      - beforeMount
     *      - afterMount
     *
     * - On Change the Step:
     *      - beforeSetStep
     *      - onStepOut
     *      - onStepIn
     *      - afterSetStep
     *
     * - On Reset Form:
     *      - beforeResetForm
     *      - afterResetForm
     *
     * - On Update a Variable:
     *      - updating
     *      - updated
     *
     * - On Save:
     *      - beforeValidate
     *      - afterValidate
     *      - beforeSave
     *      - afterSave
     * @param string $hook
     * @param ...$args
     * @return void
     */
    public function callHook(string $hook, ...$args): void {
        if (!method_exists($this, $hook)) {
            return;
        }

        $this->{$hook}(...$args);
    }

}
