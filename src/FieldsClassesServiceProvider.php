<?php


namespace SergeYugai\Laravel\Backpack\FieldsAsClasses;


use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\AddressAlgoliaField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\AddressGoogleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\BrowseField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\BrowseMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Base64ImageField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\CheckboxField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ChecklistField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ChecklistDependencyField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\CkeditorField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ColorField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ColorPickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\CustomHtmlField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DateField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DatePickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DateRangeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DatetimeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DatetimePickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\EasymdeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\EmailField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\EnumField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\HiddenField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\IconPickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ImageField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\MonthField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\NumberField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\PageOrLinkField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\PasswordField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RadioField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RangeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RelationshipField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RepeatableField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectGroupedField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2Field;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2MultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2NestedField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2GroupedField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectAndOrderField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectFromArrayField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2FromArrayField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2FromAjaxField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2FromAjaxMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SimplemdeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SummernoteField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TableField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TextField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TextareaField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TimeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TinymceField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\UploadField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\UploadMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\UrlField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\VideoField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ViewField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\WeekField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\WysiwygField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ArrayColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ArrayCountColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\BooleanColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\CheckColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\CheckboxColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ClosureColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\DateColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\DatetimeColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\EmailColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ImageColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\MarkdownColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ModelFunctionColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ModelFunctionAttributeColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\MultidimensionalArrayColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\NumberColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\PhoneColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RadioColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RelationshipColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RelationshipCountColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RowNumberColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\TextColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\SelectColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\SelectFromArrayColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\SelectMultipleColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\TableColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\UploadMultipleColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\VideoColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ViewColumn;


class FieldsClassesServiceProvider
{
    public function boot(): void
    {
        CrudPanel::macro('addressAlgoliaField', function (string $name) {
            return AddressAlgoliaField::name($name);
        });
        CrudPanel::macro('addressGoogleField', function (string $name) {
            return AddressGoogleField::name($name);
        });
        CrudPanel::macro('browseField', function (string $name) {
            return BrowseField::name($name);
        });
        CrudPanel::macro('browseMultipleField', function (string $name) {
            return BrowseMultipleField::name($name);
        });
        CrudPanel::macro('base64ImageField', function (string $name) {
            return Base64ImageField::name($name);
        });
        CrudPanel::macro('checkboxField', function (string $name) {
            return CheckboxField::name($name);
        });
        CrudPanel::macro('checklistField', function (string $name) {
            return ChecklistField::name($name);
        });
        CrudPanel::macro('checklistDependencyField', function (string $name) {
            return ChecklistDependencyField::name($name);
        });
        CrudPanel::macro('ckeditorField', function (string $name) {
            return CkeditorField::name($name);
        });
        CrudPanel::macro('colorField', function (string $name) {
            return ColorField::name($name);
        });
        CrudPanel::macro('colorPickerField', function (string $name) {
            return ColorPickerField::name($name);
        });
        CrudPanel::macro('customHtmlField', function (string $name) {
            return CustomHtmlField::name($name);
        });
        CrudPanel::macro('dateField', function (string $name) {
            return DateField::name($name);
        });
        CrudPanel::macro('datePickerField', function (string $name) {
            return DatePickerField::name($name);
        });
        CrudPanel::macro('dateRangeField', function (string $name) {
            return DateRangeField::name($name);
        });
        CrudPanel::macro('datetimeField', function (string $name) {
            return DatetimeField::name($name);
        });
        CrudPanel::macro('datetimePickerField', function (string $name) {
            return DatetimePickerField::name($name);
        });
        CrudPanel::macro('easymdeField', function (string $name) {
            return EasymdeField::name($name);
        });
        CrudPanel::macro('emailField', function (string $name) {
            return EmailField::name($name);
        });
        CrudPanel::macro('enumField', function (string $name) {
            return EnumField::name($name);
        });
        CrudPanel::macro('hiddenField', function (string $name) {
            return HiddenField::name($name);
        });
        CrudPanel::macro('iconPickerField', function (string $name) {
            return IconPickerField::name($name);
        });
        CrudPanel::macro('imageField', function (string $name) {
            return ImageField::name($name);
        });
        CrudPanel::macro('monthField', function (string $name) {
            return MonthField::name($name);
        });
        CrudPanel::macro('numberField', function (string $name) {
            return NumberField::name($name);
        });
        CrudPanel::macro('pageOrLinkField', function (string $name) {
            return PageOrLinkField::name($name);
        });
        CrudPanel::macro('passwordField', function (string $name) {
            return PasswordField::name($name);
        });
        CrudPanel::macro('radioField', function (string $name) {
            return RadioField::name($name);
        });
        CrudPanel::macro('rangeField', function (string $name) {
            return RangeField::name($name);
        });
        CrudPanel::macro('relationshipField', function (string $name) {
            return RelationshipField::name($name);
        });
        CrudPanel::macro('repeatableField', function (string $name) {
            return RepeatableField::name($name);
        });
        CrudPanel::macro('selectField', function (string $name) {
            return SelectField::name($name);
        });
        CrudPanel::macro('selectGroupedField', function (string $name) {
            return SelectGroupedField::name($name);
        });
        CrudPanel::macro('select2Field', function (string $name) {
            return Select2Field::name($name);
        });
        CrudPanel::macro('selectMultipleField', function (string $name) {
            return SelectMultipleField::name($name);
        });
        CrudPanel::macro('select2MultipleField', function (string $name) {
            return Select2MultipleField::name($name);
        });
        CrudPanel::macro('select2NestedField', function (string $name) {
            return Select2NestedField::name($name);
        });
        CrudPanel::macro('select2GroupedField', function (string $name) {
            return Select2GroupedField::name($name);
        });
        CrudPanel::macro('selectAndOrderField', function (string $name) {
            return SelectAndOrderField::name($name);
        });
        CrudPanel::macro('selectFromArrayField', function (string $name) {
            return SelectFromArrayField::name($name);
        });
        CrudPanel::macro('select2FromArrayField', function (string $name) {
            return Select2FromArrayField::name($name);
        });
        CrudPanel::macro('select2FromAjaxField', function (string $name) {
            return Select2FromAjaxField::name($name);
        });
        CrudPanel::macro('select2FromAjaxMultipleField', function (string $name) {
            return Select2FromAjaxMultipleField::name($name);
        });
        CrudPanel::macro('simplemdeField', function (string $name) {
            return SimplemdeField::name($name);
        });
        CrudPanel::macro('summernoteField', function (string $name) {
            return SummernoteField::name($name);
        });
        CrudPanel::macro('tableField', function (string $name) {
            return TableField::name($name);
        });
        CrudPanel::macro('textField', function (string $name) {
            return TextField::name($name);
        });
        CrudPanel::macro('textareaField', function (string $name) {
            return TextareaField::name($name);
        });
        CrudPanel::macro('timeField', function (string $name) {
            return TimeField::name($name);
        });
        CrudPanel::macro('tinymceField', function (string $name) {
            return TinymceField::name($name);
        });
        CrudPanel::macro('uploadField', function (string $name) {
            return UploadField::name($name);
        });
        CrudPanel::macro('uploadMultipleField', function (string $name) {
            return UploadMultipleField::name($name);
        });
        CrudPanel::macro('urlField', function (string $name) {
            return UrlField::name($name);
        });
        CrudPanel::macro('videoField', function (string $name) {
            return VideoField::name($name);
        });
        CrudPanel::macro('viewField', function (string $name) {
            return ViewField::name($name);
        });
        CrudPanel::macro('weekField', function (string $name) {
            return WeekField::name($name);
        });
        CrudPanel::macro('wysiwygField', function (string $name) {
            return WysiwygField::name($name);
        });
        CrudPanel::macro('arrayColumn', function (string $name) {
            return ArrayColumn::name($name);
        });
        CrudPanel::macro('arrayCountColumn', function (string $name) {
            return ArrayCountColumn::name($name);
        });
        CrudPanel::macro('booleanColumn', function (string $name) {
            return BooleanColumn::name($name);
        });
        CrudPanel::macro('checkColumn', function (string $name) {
            return CheckColumn::name($name);
        });
        CrudPanel::macro('checkboxColumn', function (string $name) {
            return CheckboxColumn::name($name);
        });
        CrudPanel::macro('closureColumn', function (string $name) {
            return ClosureColumn::name($name);
        });
        CrudPanel::macro('dateColumn', function (string $name) {
            return DateColumn::name($name);
        });
        CrudPanel::macro('datetimeColumn', function (string $name) {
            return DatetimeColumn::name($name);
        });
        CrudPanel::macro('emailColumn', function (string $name) {
            return EmailColumn::name($name);
        });
        CrudPanel::macro('imageColumn', function (string $name) {
            return ImageColumn::name($name);
        });
        CrudPanel::macro('markdownColumn', function (string $name) {
            return MarkdownColumn::name($name);
        });
        CrudPanel::macro('modelFunctionColumn', function (string $name) {
            return ModelFunctionColumn::name($name);
        });
        CrudPanel::macro('modelFunctionAttributeColumn', function (string $name) {
            return ModelFunctionAttributeColumn::name($name);
        });
        CrudPanel::macro('multidimensionalArrayColumn', function (string $name) {
            return MultidimensionalArrayColumn::name($name);
        });
        CrudPanel::macro('numberColumn', function (string $name) {
            return NumberColumn::name($name);
        });
        CrudPanel::macro('phoneColumn', function (string $name) {
            return PhoneColumn::name($name);
        });
        CrudPanel::macro('radioColumn', function (string $name) {
            return RadioColumn::name($name);
        });
        CrudPanel::macro('relationshipColumn', function (string $name) {
            return RelationshipColumn::name($name);
        });
        CrudPanel::macro('relationshipCountColumn', function (string $name) {
            return RelationshipCountColumn::name($name);
        });
        CrudPanel::macro('rowNumberColumn', function (string $name) {
            return RowNumberColumn::name($name);
        });
        CrudPanel::macro('textColumn', function (string $name) {
            return TextColumn::name($name);
        });
        CrudPanel::macro('selectColumn', function (string $name) {
            return SelectColumn::name($name);
        });
        CrudPanel::macro('selectFromArrayColumn', function (string $name) {
            return SelectFromArrayColumn::name($name);
        });
        CrudPanel::macro('selectMultipleColumn', function (string $name) {
            return SelectMultipleColumn::name($name);
        });
        CrudPanel::macro('tableColumn', function (string $name) {
            return TableColumn::name($name);
        });
        CrudPanel::macro('uploadMultipleColumn', function (string $name) {
            return UploadMultipleColumn::name($name);
        });
        CrudPanel::macro('videoColumn', function (string $name) {
            return VideoColumn::name($name);
        });
        CrudPanel::macro('viewColumn', function (string $name) {
            return ViewColumn::name($name);
        });

    }
}
