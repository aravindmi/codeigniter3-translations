<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'നിങ്ങൾ സമർപ്പിച്ച കണക്ഷൻ സ്ട്രിംഗ് അടിസ്ഥാനമാക്കി ഡാറ്റാബേസ് ക്രമീകരണങ്ങൾ നിർണ്ണയിക്കാനായില്ലാ.';
$lang['db_unable_to_connect'] = 'നൽകിയിരിക്കുന്ന ക്രമീകരണങ്ങൾ ഉപയോഗിച്ച് നിങ്ങളുടെ ഡാറ്റാബേസ് സെർവർ ബന്ധപ്പെടാൻ സാധിക്കുന്നില്ലാ.';
$lang['db_unable_to_select'] = 'തന്നിട്ടുള്ള ഡാറ്റാബേസ് തിരഞ്ഞെടുക്കാന്‍ സാധിക്കുന്നില്ലാ: %s';
$lang['db_unable_to_create'] = 'തന്നിട്ടുള്ള ഡാറ്റാബേസ് നിര്‍മിക്കാന്‍  സാധിക്കുന്നില്ലാ: %s';
$lang['db_invalid_query'] = 'നിങ്ങൾ സമർപ്പിച്ച ഡാറ്റാബേസ് query സാധുവല്ലാ.';
$lang['db_must_set_table'] = 'നിങ്ങളുടെ query-യില്‍ ഉപയോഗിക്കുന്ന ഡാറ്റാബേസ്  table നിര്‍മ്മിക്കേണ്ടതാകുന്നു.';
$lang['db_must_use_set'] = 'നിങ്ങൾ ഒരു എൻട്രി പുതുക്കുന്നതിനായി "set" രീതി ഉപയോഗിക്കണം.';
$lang['db_must_use_index'] = 'നിങ്ങൾ ബാച്ച് അപ്ഡേറ്റുകൾക്കായി പൊരുത്തപ്പെടുന്ന ഒരു സൂചിക ( index) വ്യക്തമാക്കേണ്ടതുണ്ട്.';
$lang['db_batch_missing_index'] = 'ബാച്ച് അപ്ഡേറ്റ് ചെയ്യുന്നത് സമർപ്പിച്ചു ഒന്നോ അതിലധികമോ വരികളില്‍ തന്നിട്ടുള്ള സൂചിക (index) കാണാനില്ല .';
$lang['db_must_use_where'] = '"where" ക്ലാസ്സ്‌ ഇല്ലാതെ  പുതുക്കല്‍ സാധ്യമല്ല.';
$lang['db_del_must_use_where'] = '"where" അല്ലെങ്ങില്‍  "like" ക്ലാസ്സ്‌  ഇല്ലാതെ നശിപ്പിക്കാന്‍ സാധ്യമല്ല .';
$lang['db_field_param_missing'] = 'ഫീൽഡുകൾ ലഭ്യമാക്കാനായി ഒരു പാരാമീറ്റർ ആയി table-ന്‍റെ പേര് ആവശ്യമാണ്.';
$lang['db_unsupported_function'] = 'ഈ സവിശേഷത നിങ്ങൾ ഉപയോഗിക്കുന്ന ഡാറ്റാബേസില്‍ ലഭ്യമല്ല.';
$lang['db_transaction_failure'] = 'Transaction പരാജയം: Rollback നിർവഹിച്ചു.';
$lang['db_unable_to_drop'] = 'തന്നിരിക്കുന്ന ഡാറ്റാബേസ് കളയാന്‍ സാധിക്കുന്നില്ല.';
$lang['db_unsupported_feature'] = 'ഈ സവിശേഷത നിങ്ങൾ ഉപയോഗിക്കുന്ന ഡാറ്റാബേസ് പ്ലാറ്റ്ഫോം പിന്തുണക്കില്ല ';
$lang['db_unsupported_compression'] = 'നിങ്ങൾ തിരഞ്ഞെടുത്തു ഫയൽ കംപ്രഷൻ ഫോർമാറ്റ് നിങ്ങളുടെ സെർവർ പിന്തുണയ്ക്കുന്നില്ല.';
$lang['db_filepath_error'] = 'നിങ്ങൾ സമർപ്പിച്ച ഫയൽ പാതയിലേക്ക് ഡാറ്റ എഴുതാൻ കഴിയുന്നില്ല.';
$lang['db_invalid_cache_path'] = 'നിങ്ങൾ സമർപ്പിച്ച കാഷെ പാത്ത്  (cache path)സാധുവല്ല അല്ലെങ്കിൽ എഴുതാൻ  സാധിക്കുന്നില്ല.';
$lang['db_table_name_required'] = 'ആ പ്രവര്‍ത്തനത്തിന്  ഒരു  table-ന്‍റെ പേര് ആവശ്യമാണ്..';
$lang['db_column_name_required'] = 'ആ പ്രവര്‍ത്തനത്തിന്  ഒരു  column-ന്‍റെ പേര് ആവശ്യമാണ്.';
$lang['db_column_definition_required'] = 'ആ പ്രവര്‍ത്തനത്തിന്  ഒരു  column-ന്‍റെ നിർവചനം  ആവശ്യമാണ്.';
$lang['db_unable_to_set_charset'] = 'ക്ലയന്റ് കണക്ഷൻ character set സജ്ജമാക്കാൻ കഴിയില്ല: %s';
$lang['db_error_heading'] = 'ഒരു ഡാറ്റാബേസിൽ പിശക് സംഭവിച്ചു';
