<?php
namespace app\widgets;

use yii\web\View;
use yii\base\Widget;

/**
 * Allows to write javascript in view inside '<script></script>' tags and render it at the end of body together with other scripts
 * '<script></script>' tags are removed from result output
 *
 * <?php
// frontend/views/product/_form.php

use common\widgets\Script;
?>

<?php Script::begin(); ?>
<script>

console.log('Product form: $(document).ready()');

</script>
<?php Script::end(); ?>
 *
 *
 */
class Script extends Widget
{
    /** @var string Script position, used in registerJs() function */
    public $position = View::POS_READY;


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        ob_start();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $script = ob_get_clean();
        $script = preg_replace('|^\s*<script>|ui', '', $script);
        $script = preg_replace('|</script>\s*$|ui', '', $script);
        $this->getView()->registerJs($script, $this->position);
    }
}