<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\Elements\PresetSections\PresetSectionsController::getInstance()->register(
    "EssentialElements\\posts-pagination-design",
    c(
        "pagination",
        "Pagination",
        [c(
        "alignment",
        "Alignment",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'flex-start', 'text' => 'Left', 'icon' => 'AlignLeftIcon'], '1' => ['value' => 'center', 'text' => 'Center', 'icon' => 'AlignCenterIcon'], '2' => ['value' => 'flex-end', 'text' => 'Right', 'icon' => 'AlignRightIcon']]],
        false,
        false,
        [],
      ), c(
        "space_above",
        "Space Above",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 50, 'step' => 1]],
        true,
        false,
        [],
      ), c(
        "space_between",
        "Space Between",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 50, 'step' => 1], 'condition' => ['path' => 'content.pagination.pagination', 'operand' => 'is one of', 'value' => ['0' => 'numbers', '1' => 'prevnext', '2' => 'numbersprevnext']]],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_everything",
      "Typography",
      "typography",
      ['condition' => ['path' => 'content.pagination.pagination', 'operand' => 'is one of', 'value' => ['0' => 'numbers', '1' => 'numbersprevnext', '2' => 'prevnext']], 'type' => 'popout']
    ), c(
        "active_color",
        "Active Color",
        [],
        ['type' => 'color', 'layout' => 'inline', 'condition' => ['path' => 'content.pagination.pagination', 'operand' => 'is one of', 'value' => ['0' => 'numbers', '1' => 'numbersprevnext']]],
        false,
        false,
        [],
      ), c(
        "display_as_buttons",
        "Display As Buttons",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => ['path' => 'content.pagination.pagination', 'operand' => 'is one of', 'value' => ['0' => 'numbers', '1' => 'numbersprevnext']]],
        false,
        false,
        [],
      ), c(
        "buttons",
        "Buttons",
        [c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 40, 'max' => 80, 'step' => 1]],
        true,
        false,
        [],
      ), c(
        "border",
        "Border",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "radius",
        "Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "active",
        "Active",
        [c(
        "border",
        "Border",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "text",
        "Text",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'design.pagination.display_as_buttons', 'operand' => 'is set', 'value' => '']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1ButtonDesign",
      "Load More Button",
      "load_more_button",
      ['condition' => ['path' => 'content.pagination.pagination', 'operand' => 'equals', 'value' => 'load_more'], 'type' => 'popout']
    ), c(
        "show_loading_icon_in_builder",
        "Show Loading Icon In Builder",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => ['path' => 'content.pagination.pagination', 'operand' => 'equals', 'value' => 'infinite']],
        false,
        false,
        [],
      ), c(
        "loading_icon",
        "Loading Icon",
        [c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'content.pagination.pagination', 'operand' => 'equals', 'value' => 'infinite']],
        false,
        false,
        [],
      ), c(
        "dots",
        "Dots",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "nudge_y",
        "Nudge Y",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.pagination.display_as_buttons', 'operand' => 'is set', 'value' => '']],
        true,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'content.pagination.pagination', 'operand' => 'is one of', 'value' => ['0' => 'numbers', '1' => 'numbersprevnext']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'popout', 'preset' => ['slug' => 'EssentialElements\\posts-pagination-design']]],
        false,
        false,
        [],
      ),
    true,
    null
);

