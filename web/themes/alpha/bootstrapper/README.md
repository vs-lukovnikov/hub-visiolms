# bootstrapper theme

## SASS Functions

Here you can get acquainted with the major changes in the project styles. 
For the convenience of all support values such as margin, padding, colors, font sizes was issued in variable.

## 1. SASS mixins

 In order for the code style to be the same, add it in front of the styles in the
desired class.

#### 1.1 Spacers
Use the following mixins to add a top, bottom, left, right, width, height and etc. The default attribute value is 1.
  ```scss
  top: rhythm(1.5);
  ```
#### 1.2 Fonts

##### 1.2.1 For the paragraphs

It takes two arguments such as screen size and paragraph size.
```scss
@include font-size-generate('sm', 'p1');
```
##### 1.2.2 For the headings

It takes three arguments such as screen size and heading size and map.

```scss
@include font-size-generate('xl', 'h5', $font-size-heading-map);
```

#### 1.3 Links

Clears the default styles for the link and add the underline when hovering.

```scss
@include link-obscure;
```
Use to display the link as plain text.
```scss
@include link-hidden;
```
Use to add underscores for the link and hide the underscore when hovering.
```scss
@include link-obscure;
```
If you are not able to add styles to the link, use the following mixins by adding styles to the block.
```scss
@include links-child-obscure;
@include links-child-hidden;
@include links-child-underlined;
```
#### 1.4 Visibility

To change the scope of the elements on the page, the following classes were implemented.

##### 1.4.1 Hide elements(use for blocks)

Used for elements which should not be immediately displayed.

```scss
 @include block-hidden;

```
For reverting 'text-invisible' use:
```scss
 @include block-displayed;
```

##### 1.4.2 Hide elements(use for text)

Used for elements which should not be immediately displayed. An example would be a collapsible fieldset that will be expanded with a click.

```scss
 @include element-hidden;

```
For reverting 'element-hidden' use:

```scss
 @include element-displayed;
```

Used for elements which should not be immediately displayed.

```scss
 @include text-invisible;
```
For reverting 'text-invisible' use:
```scss
 @include text-visible;
```

##### 1.4.3 Show elements

```scss
@include element-displayed;

@include inline-displayed;

@include inline-block-displayed;
```

##### 1.4.4 Hide elements visually, but keep them available for screen-readers

Used for information required for screen-reader users to understand and use the site where visual display is undesirable. Information provided in this manner should be kept concise, to avoid unnecessary burden on the user.
 "!important" is used to prevent unintentional overrides.

 ```scss
  @include element-invisible;
 ```

For reverting 'element-invisible' use:

 ```scss
 @include element-visible;
 ```

##### 1.4.5 Hidden focus on the item

 The .element-focusable class extends the .element-invisible class to allow the element to be focusable when navigated to via the keyboard.

  ```scss
   @include element-focusable;
  ```
  
#### 1.5 Margin and padding

Use the following mixins to add a margin and padding. This function takes the following attributes such as top, right, bottom ,left.
The default attributes value are NULL.

```scss
@include margin(rhythm(1), rhythm(1.2), rhythm(1), rhythm(1));
@include padding(rhythm(0.5), rhythm(1), rhythm(3), rhythm(0.15));
```

## 2 Semantic classes
You can use the following existing CSS classes in HTML and admin area.

### 2.1 Margins and paddings
Assign margin or padding values to an element with shorthand classes.
Example of classes:
```html
<div class="my-125 px-015">
  125 = 1.25rem
  015 = 0.15rem
</div>
```
Also you can set specific classes, such as ```m-5px``` or ```p-10px```. It will be equal to
```scss
* {
  padding: 10px;
}
```

### 2.2 Headings
All HTML headings, ```<h1>``` through ```<h6>```, are available. <br/>
```.h0``` through .h6 classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element. <br/>
Set ```.h2``` class to an element and font-size of the element will differ on different screens. See ```$font-size-heading-map```. <br/>
If you don't need to change font-size of an element on different screens you can specify the desired breakpoint as a prefix. <br/>
```html
<h2 class="h1-xl">
  Applies xl font-size of the h1 class only for extra large screen and more.
</h2>
```
Font-size of the ```.h0``` class is equal to ```1rem``` but ```.h1``` class is the largest.

### 2.3 Paragraphs
```.p0``` through ```.p6``` classes are available but in this case ```.p0``` class is the smallest and ```.p6``` class is the largest. <br/>
Set ```.p3``` class to an element and font-size of the element will differ on different screens. See ```$font-size-paragraph-map```. <br/>
If you don't need to change font-size of an element on different screens you can specify the desired breakpoint as a prefix. <br/>
```html
<p class="p3-sm">
  Applies sm font-size of the p3 class only for tablet screen and more.
</p>
```
In some cases when you don't have the ability to apply a class to the ```p``` tag you can apply for example ```.p2-xl-block``` class to the its wrapper and styles will change only for child paragraphs. <br/>
There is also ```.p2-xl-text``` what applies its own styles to the child ```li``` and ```p``` elements.

### 2.4 Line height
To change default line height of an element you can set some special class to an element or to a wrapper of some elements. <br/>
For example:
```html
<div class="lh-text-150">
  <p>
    line-height: 150%;
  </p>
  <p class="lh-200">
    line-height: 200%;
  </p>
  <ul>
    <li>line-height: 150%;</li>
    <li>line-height: 150%;</li>
  </ul>
</div>
```

### 2.5 Font weight
Quickly change the weight of text:
```html
<div class="fw-800">
  <p>font-weight: 800;</p>
</div>
```

### 2.6 Buttons
There are 2 groups of classes for size and width:
```html
<input class="btn btn-size-large btn-width-narrow" name="op" value="Submit"/>
```
Size suffixes: tiny, small, big, large, huge
Width suffixes: narrowest, narrow, wide, wider, widest