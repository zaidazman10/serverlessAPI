<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>LRD</title>
      <meta name="description" content="Laravel Request Docs">
      <meta name="keywords" content="">
      <meta name="csrf-token" content="">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
      <script src="https://unpkg.com/vue-prism-editor"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
      <link rel="stylesheet" href="https://unpkg.com/vue-prism-editor/dist/prismeditor.min.css" />

      <script src="https://unpkg.com/prismjs/prism.js"></script>
      <link rel="stylesheet" href="https://unpkg.com/prismjs/themes/prism-tomorrow.css" />

      <script src="https://unpkg.com/faker@5.5.3/dist/faker.min.js" referrerpolicy="no-referrer"></script>
      <script src="https://unpkg.com/string-similarity@4.0.2/umd/string-similarity.min.js" referrerpolicy="no-referrer"></script>

      <script src="https://unpkg.com/vue-markdown@2.2.4/dist/vue-markdown.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sql-formatter/3.1.0/sql-formatter.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
      <style>
        [v-cloak] {
            display: none;
        }
        a {
            color: #3f3398;
        }

        .my-prism-editor {
            /* you must provide font-family font-size line-height. Example:*/
            font-family: Fira code, Fira Mono, Consolas, Menlo, Courier, monospace;
            font-size: 12px;
            line-height: 1.25;
            padding: 5px;
        }

        /* optional class for removing the outline */
        .prism-editor__textarea:focus {
            outline: none;
        }
        .dropdown{
            position: relative;
            width: 100%;
        }
        .dropdown-input, .dropdown-selected{
            width: 100%;
            font-size:14px;
            padding: 10px 16px;
            border: 1px solid transparent;
            background: #edf2f7;
            outline: none;
            border-radius: 8px;
        }
        .dropdown-input:focus, .dropdown-selected:hover{
            background: #fff;
            border-color: #e2e8f0;
        }
        .dropdown-input::placeholder{
            opacity: 0.7;
        }
        .dropdown-selected{
            cursor: pointer;
        }
        .dropdown-list{
            z-index: 9999;
            position: absolute;
            width: 100%;
            max-height: 500px;
            margin-top: 4px;
            overflow-y: auto;
            background: #ffffff;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
        }
        .dropdown-item{
            display: flex;
            width: 100%;
            padding: 2px 6px;
            cursor: pointer;
            font-size: 12px;
        }
        .dropdown-item:hover{
            background: #edf2f7;
        }
      </style>
   </head>
   <body class="bg-gray-100 tracking-wide bg-gray-200">

        <nav class="bg-white py-2 ">
            <div class="container px-4 md:flex md:items-center">
                <div class="flex justify-between items-center">
                    <a href="request-docs" class="font-bold text-xl text-indigo-600">LRD</a>
                </div>
            </div>
        </nav>
      <div id="app" v-cloak class="w-full flex lg:pt-10">
         <aside class="text-sm ml-1.5 text-grey-darkest break-all bg-gray-200 pl-2 h-screen sticky top-1 overflow-auto">
            <h1 class="font-medium mx-3 mt-3" style="width: max-content;min-width:350px;">Routes List</h1>
            <hr class="border-b border-gray-300">
            <table class="table-fixed text-sm mt-5" style="width: max-content">
                <tbody>
                                        <tr>
                        <td>
                            <a href="#GET-sanctum/csrf-cookie" @click="highlightSidebar(0)" v-if="!docs[0]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text-green-100 bg-green-500
                                    text- bg--500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    GET
                                </span>
                                <span class="text-xs" v-bind:class="docs[0]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[0]['responseOk'] === null">sanctum/csrf-cookie</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[0]['responseOk'] === true">
                                        sanctum/csrf-cookie -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[0]['responseCode'] + ', Took:' + docs[0]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[0]['responseOk'] === false">
                                        sanctum/csrf-cookie -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[0]['responseCode'] + ', Took:' + docs[0]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#GET-api/contacts" @click="highlightSidebar(1)" v-if="!docs[1]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text-green-100 bg-green-500
                                    text- bg--500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    GET
                                </span>
                                <span class="text-xs" v-bind:class="docs[1]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[1]['responseOk'] === null">api/contacts</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[1]['responseOk'] === true">
                                        api/contacts -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[1]['responseCode'] + ', Took:' + docs[1]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[1]['responseOk'] === false">
                                        api/contacts -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[1]['responseCode'] + ', Took:' + docs[1]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#GET-api/contacts/create" @click="highlightSidebar(2)" v-if="!docs[2]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text-green-100 bg-green-500
                                    text- bg--500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    GET
                                </span>
                                <span class="text-xs" v-bind:class="docs[2]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[2]['responseOk'] === null">api/contacts/create</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[2]['responseOk'] === true">
                                        api/contacts/create -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[2]['responseCode'] + ', Took:' + docs[2]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[2]['responseOk'] === false">
                                        api/contacts/create -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[2]['responseCode'] + ', Took:' + docs[2]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#GET-api/contacts/{contact}" @click="highlightSidebar(3)" v-if="!docs[3]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text-green-100 bg-green-500
                                    text- bg--500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    GET
                                </span>
                                <span class="text-xs" v-bind:class="docs[3]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[3]['responseOk'] === null">api/contacts/{contact}</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[3]['responseOk'] === true">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[3]['responseCode'] + ', Took:' + docs[3]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[3]['responseOk'] === false">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[3]['responseCode'] + ', Took:' + docs[3]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#GET-api/contacts/{contact}/edit" @click="highlightSidebar(4)" v-if="!docs[4]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text-green-100 bg-green-500
                                    text- bg--500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    GET
                                </span>
                                <span class="text-xs" v-bind:class="docs[4]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[4]['responseOk'] === null">api/contacts/{contact}/edit</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[4]['responseOk'] === true">
                                        api/contacts/{contact}/edit -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[4]['responseCode'] + ', Took:' + docs[4]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[4]['responseOk'] === false">
                                        api/contacts/{contact}/edit -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[4]['responseCode'] + ', Took:' + docs[4]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#GET-api/contacts/search/{parameter}" @click="highlightSidebar(5)" v-if="!docs[5]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text-green-100 bg-green-500
                                    text- bg--500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    GET
                                </span>
                                <span class="text-xs" v-bind:class="docs[5]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[5]['responseOk'] === null">api/contacts/search/{parameter}</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[5]['responseOk'] === true">
                                        api/contacts/search/{parameter} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[5]['responseCode'] + ', Took:' + docs[5]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[5]['responseOk'] === false">
                                        api/contacts/search/{parameter} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[5]['responseCode'] + ', Took:' + docs[5]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#POST-api/contacts" @click="highlightSidebar(6)" v-if="!docs[6]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text--100 bg--500
                                    text-black bg-red-500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    POST
                                </span>
                                <span class="text-xs" v-bind:class="docs[6]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[6]['responseOk'] === null">api/contacts</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[6]['responseOk'] === true">
                                        api/contacts -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[6]['responseCode'] + ', Took:' + docs[6]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[6]['responseOk'] === false">
                                        api/contacts -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[6]['responseCode'] + ', Took:' + docs[6]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#POST-api/contacts/get-contact" @click="highlightSidebar(7)" v-if="!docs[7]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text--100 bg--500
                                    text-black bg-red-500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text- bg-
                                    ">
                                    POST
                                </span>
                                <span class="text-xs" v-bind:class="docs[7]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[7]['responseOk'] === null">api/contacts/get-contact</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[7]['responseOk'] === true">
                                        api/contacts/get-contact -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[7]['responseCode'] + ', Took:' + docs[7]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[7]['responseOk'] === false">
                                        api/contacts/get-contact -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[7]['responseCode'] + ', Took:' + docs[7]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#PUT-api/contacts/{contact}" @click="highlightSidebar(8)" v-if="!docs[8]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text--100 bg--500
                                    text- bg--500
                                    text-black-100 bg-yellow-500
                                    text-black-100 bg-yellow-500
                                    text- bg-
                                    ">
                                    PUT
                                </span>
                                <span class="text-xs" v-bind:class="docs[8]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[8]['responseOk'] === null">api/contacts/{contact}</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[8]['responseOk'] === true">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[8]['responseCode'] + ', Took:' + docs[8]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[8]['responseOk'] === false">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[8]['responseCode'] + ', Took:' + docs[8]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#PUT-api/contacts/{contact}" @click="highlightSidebar(9)" v-if="!docs[9]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text--100 bg--500
                                    text- bg--500
                                    text-black-100 bg-yellow-500
                                    text-black-100 bg-yellow-500
                                    text- bg-
                                    ">
                                    PUT
                                </span>
                                <span class="text-xs" v-bind:class="docs[9]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[9]['responseOk'] === null">api/contacts/{contact}</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[9]['responseOk'] === true">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[9]['responseCode'] + ', Took:' + docs[9]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[9]['responseOk'] === false">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[9]['responseCode'] + ', Took:' + docs[9]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <a href="#DELETE-api/contacts/{contact}" @click="highlightSidebar(10)" v-if="!docs[10]['isHidden']">
                                <span class="
                                    font-medium
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-2
                                    py-1
                                    text-xs
                                    font-bold
                                    leading-none
                                    rounded
                                    text--100 bg--500
                                    text- bg--500
                                    text--100 bg--500
                                    text--100 bg--500
                                    text-white bg-black
                                    ">
                                    DELETE
                                </span>
                                <span class="text-xs" v-bind:class="docs[10]['isActiveSidebar'] ? 'font-bold':''">
                                    <span class="text-gray-800 pr-1 pl-1" v-if="docs[10]['responseOk'] === null">api/contacts/{contact}</span>
                                    <span class="font-bold text-green-600 border rounded-full pr-1 pl-1 border-green-600" v-if="docs[10]['responseOk'] === true">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[10]['responseCode'] + ', Took:' + docs[10]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                    <span class="font-bold text-red-600 border rounded-full pr-1 pl-1 border-red-500" v-if="docs[10]['responseOk'] === false">
                                        api/contacts/{contact} -
                                        <span
                                            class="inline-flex text-xs"
                                            v-text="'Status:'+docs[10]['responseCode'] + ', Took:' + docs[10]['responseTime'] + 'ms'">
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </td>
                    </tr>
                                    </tbody>
            </table>
        </aside>
         <br><br>
         <div class="ml-6 mr-6 pl-2 w-2/3 p-2" style="width: 100%">
            <h1 class="pl-2 pr-2 break-normal text-black break-normal font-sans text-black font-medium">
                Search・Sort settings
            </h1>
            <hr class="border-b border-gray-300">
            <br>
            <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow">
                <div class="font-sans">
                    <h2 class="text-sm break-normal text-black break-normal font-sans pb-1 pt-1 text-black">
                        Filter
                    </h2>
                    <p class="text-xs pb-2 font-medium text-gray-500">Hide non matching</code></p>
                    <input type="text" v-model="filterTerm" @input="filterDocs" class="w-full p-2 border-2 border-gray-300 rounded" placeholder="/api/search">
                </div>
            </section>
            <h1 class="pl-2 pr-2 break-normal text-black break-normal font-sans text-black font-medium">
                Request Settings (editable)
            </h1>
            <hr class="border-b border-gray-300">
            <br>
            <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow">
                <div class="font-sans">
                    <h2 class="text-sm break-normal text-black break-normal font-sans pb-1 pt-1 text-black">
                        Append Request Headers
                    </h2>
                    <p class="text-xs pb-2 font-medium text-gray-500">Default headers sent on every request. Format <code>Key:Value</code></p>
                    <prism-editor
                        class="my-prism-editor"
                        style="min-height:100px;background:#2d2d2d;color: #ccc;resize:both" v-model="requestHeaders" :highlight="highlighter" line-numbers></prism-editor>
                </div>
            </section>
            <h1 class="pl-2 pr-2 break-normal text-black break-normal font-sans text-black font-medium">
                Routes List
            </h1>
            <hr class="border-b border-gray-300">
            <br>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[0]['isHidden']">
                <div class="font-sans" id="GET-sanctum/csrf-cookie">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text-green-100 bg-green-500
                        text- bg--500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        GET
                    </span>
                    <span class="">
                        <a href="#sanctum/csrf-cookie">sanctum/csrf-cookie</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">GET</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/sanctum/csrf-cookie">{{window.location.origin}}/sanctum/csrf-cookie</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">Laravel\Sanctum\Http\Controllers\CsrfCookieController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@show</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">web</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[0]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[0]['try']"
                    v-on:click="docs[0]['try'] = !docs[0]['try'];docs[0]['cancel'] = !docs[0]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[0]['cancel']"
                    v-on:click="docs[0]['cancel'] = !docs[0]['cancel'];docs[0]['try'] = !docs[0]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[0]['try']"
                    @click="request(docs[0])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[0]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[0]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[0]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[0]['response'] && !docs[0]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[0]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[0]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[0]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[0]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[0]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[0]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[0]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[0]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[0]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[0]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[0]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[0]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[0]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[0]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[0]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[0]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[0]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[0]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[0]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[1]['isHidden']">
                <div class="font-sans" id="GET-api/contacts">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text-green-100 bg-green-500
                        text- bg--500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        GET
                    </span>
                    <span class="">
                        <a href="#api/contacts">api/contacts</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">GET</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts">{{window.location.origin}}/api/contacts</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@index</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[1]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[1]['try']"
                    v-on:click="docs[1]['try'] = !docs[1]['try'];docs[1]['cancel'] = !docs[1]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[1]['cancel']"
                    v-on:click="docs[1]['cancel'] = !docs[1]['cancel'];docs[1]['try'] = !docs[1]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[1]['try']"
                    @click="request(docs[1])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[1]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[1]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[1]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[1]['response'] && !docs[1]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[1]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[1]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[1]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[1]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[1]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[1]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[1]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[1]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[1]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[1]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[1]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[1]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[1]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[1]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[1]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[1]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[1]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[1]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[1]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[2]['isHidden']">
                <div class="font-sans" id="GET-api/contacts/create">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text-green-100 bg-green-500
                        text- bg--500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        GET
                    </span>
                    <span class="">
                        <a href="#api/contacts/create">api/contacts/create</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">GET</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/create">{{window.location.origin}}/api/contacts/create</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@create</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[2]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[2]['try']"
                    v-on:click="docs[2]['try'] = !docs[2]['try'];docs[2]['cancel'] = !docs[2]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[2]['cancel']"
                    v-on:click="docs[2]['cancel'] = !docs[2]['cancel'];docs[2]['try'] = !docs[2]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[2]['try']"
                    @click="request(docs[2])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[2]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[2]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[2]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[2]['response'] && !docs[2]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[2]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[2]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[2]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[2]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[2]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[2]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[2]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[2]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[2]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[2]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[2]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[2]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[2]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[2]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[2]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[2]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[2]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[2]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[2]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[3]['isHidden']">
                <div class="font-sans" id="GET-api/contacts/{contact}">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text-green-100 bg-green-500
                        text- bg--500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        GET
                    </span>
                    <span class="">
                        <a href="#api/contacts/{contact}">api/contacts/{contact}</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">GET</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/{contact}">{{window.location.origin}}/api/contacts/{contact}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@show</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[3]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[3]['try']"
                    v-on:click="docs[3]['try'] = !docs[3]['try'];docs[3]['cancel'] = !docs[3]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[3]['cancel']"
                    v-on:click="docs[3]['cancel'] = !docs[3]['cancel'];docs[3]['try'] = !docs[3]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[3]['try']"
                    @click="request(docs[3])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[3]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[3]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[3]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[3]['response'] && !docs[3]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[3]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[3]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[3]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[3]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[3]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[3]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[3]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[3]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[3]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[3]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[3]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[3]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[3]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[3]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[3]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[3]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[3]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[3]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[3]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[4]['isHidden']">
                <div class="font-sans" id="GET-api/contacts/{contact}/edit">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text-green-100 bg-green-500
                        text- bg--500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        GET
                    </span>
                    <span class="">
                        <a href="#api/contacts/{contact}/edit">api/contacts/{contact}/edit</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">GET</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/{contact}/edit">{{window.location.origin}}/api/contacts/{contact}/edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@edit</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[4]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[4]['try']"
                    v-on:click="docs[4]['try'] = !docs[4]['try'];docs[4]['cancel'] = !docs[4]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[4]['cancel']"
                    v-on:click="docs[4]['cancel'] = !docs[4]['cancel'];docs[4]['try'] = !docs[4]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[4]['try']"
                    @click="request(docs[4])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[4]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[4]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[4]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[4]['response'] && !docs[4]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[4]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[4]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[4]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[4]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[4]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[4]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[4]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[4]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[4]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[4]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[4]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[4]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[4]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[4]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[4]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[4]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[4]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[4]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[4]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[5]['isHidden']">
                <div class="font-sans" id="GET-api/contacts/search/{parameter}">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text-green-100 bg-green-500
                        text- bg--500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        GET
                    </span>
                    <span class="">
                        <a href="#api/contacts/search/{parameter}">api/contacts/search/{parameter}</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">GET</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/search/{parameter}">{{window.location.origin}}/api/contacts/search/{parameter}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@search</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[5]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[5]['try']"
                    v-on:click="docs[5]['try'] = !docs[5]['try'];docs[5]['cancel'] = !docs[5]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[5]['cancel']"
                    v-on:click="docs[5]['cancel'] = !docs[5]['cancel'];docs[5]['try'] = !docs[5]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[5]['try']"
                    @click="request(docs[5])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[5]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[5]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[5]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[5]['response'] && !docs[5]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[5]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[5]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[5]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[5]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[5]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[5]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[5]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[5]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[5]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[5]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[5]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[5]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[5]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[5]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[5]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[5]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[5]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[5]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[5]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[6]['isHidden']">
                <div class="font-sans" id="POST-api/contacts">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text--100 bg--500
                        text-black bg-red-500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        POST
                    </span>
                    <span class="">
                        <a href="#api/contacts">api/contacts</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">POST</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts">{{window.location.origin}}/api/contacts</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@store</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[6]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[6]['try']"
                    v-on:click="docs[6]['try'] = !docs[6]['try'];docs[6]['cancel'] = !docs[6]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[6]['cancel']"
                    v-on:click="docs[6]['cancel'] = !docs[6]['cancel'];docs[6]['try'] = !docs[6]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[6]['try']"
                    @click="request(docs[6])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[6]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[6]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[6]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                        <h3 class="font-medium">REQUEST BODY<sup class="text-red-500"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">JSON body for the POST|PUT|DELETE request</p>
                            <prism-editor
                                class="my-prism-editor"
                                style="min-height:200px;background:#2d2d2d;color: #ccc;resize:both"
                                v-model="docs[6]['body']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[6]['response'] && !docs[6]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[6]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[6]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[6]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[6]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[6]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[6]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[6]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[6]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[6]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[6]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[6]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[6]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[6]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[6]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[6]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[6]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[6]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[6]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[6]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[7]['isHidden']">
                <div class="font-sans" id="POST-api/contacts/get-contact">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text--100 bg--500
                        text-black bg-red-500
                        text--100 bg--500
                        text--100 bg--500
                        text- bg-
                        ">
                        POST
                    </span>
                    <span class="">
                        <a href="#api/contacts/get-contact">api/contacts/get-contact</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">POST</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/get-contact">{{window.location.origin}}/api/contacts/get-contact</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@getContact</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[7]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[7]['try']"
                    v-on:click="docs[7]['try'] = !docs[7]['try'];docs[7]['cancel'] = !docs[7]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[7]['cancel']"
                    v-on:click="docs[7]['cancel'] = !docs[7]['cancel'];docs[7]['try'] = !docs[7]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[7]['try']"
                    @click="request(docs[7])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[7]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[7]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[7]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                        <h3 class="font-medium">REQUEST BODY<sup class="text-red-500"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">JSON body for the POST|PUT|DELETE request</p>
                            <prism-editor
                                class="my-prism-editor"
                                style="min-height:200px;background:#2d2d2d;color: #ccc;resize:both"
                                v-model="docs[7]['body']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[7]['response'] && !docs[7]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[7]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[7]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[7]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[7]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[7]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[7]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[7]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[7]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[7]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[7]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[7]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[7]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[7]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[7]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[7]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[7]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[7]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[7]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[7]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[8]['isHidden']">
                <div class="font-sans" id="PUT-api/contacts/{contact}">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text--100 bg--500
                        text- bg--500
                        text-black-100 bg-yellow-500
                        text-black-100 bg-yellow-500
                        text- bg-
                        ">
                        PUT
                    </span>
                    <span class="">
                        <a href="#api/contacts/{contact}">api/contacts/{contact}</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">PUT</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/{contact}">{{window.location.origin}}/api/contacts/{contact}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@update</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[8]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[8]['try']"
                    v-on:click="docs[8]['try'] = !docs[8]['try'];docs[8]['cancel'] = !docs[8]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[8]['cancel']"
                    v-on:click="docs[8]['cancel'] = !docs[8]['cancel'];docs[8]['try'] = !docs[8]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[8]['try']"
                    @click="request(docs[8])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[8]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[8]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[8]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                        <h3 class="font-medium">REQUEST BODY<sup class="text-red-500"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">JSON body for the POST|PUT|DELETE request</p>
                            <prism-editor
                                class="my-prism-editor"
                                style="min-height:200px;background:#2d2d2d;color: #ccc;resize:both"
                                v-model="docs[8]['body']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[8]['response'] && !docs[8]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[8]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[8]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[8]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[8]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[8]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[8]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[8]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[8]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[8]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[8]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[8]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[8]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[8]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[8]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[8]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[8]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[8]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[8]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[8]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[9]['isHidden']">
                <div class="font-sans" id="PUT-api/contacts/{contact}">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text--100 bg--500
                        text- bg--500
                        text-black-100 bg-yellow-500
                        text-black-100 bg-yellow-500
                        text- bg-
                        ">
                        PUT
                    </span>
                    <span class="">
                        <a href="#api/contacts/{contact}">api/contacts/{contact}</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">PUT</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/{contact}">{{window.location.origin}}/api/contacts/{contact}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@update</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[9]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[9]['try']"
                    v-on:click="docs[9]['try'] = !docs[9]['try'];docs[9]['cancel'] = !docs[9]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[9]['cancel']"
                    v-on:click="docs[9]['cancel'] = !docs[9]['cancel'];docs[9]['try'] = !docs[9]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[9]['try']"
                    @click="request(docs[9])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[9]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[9]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[9]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                        <h3 class="font-medium">REQUEST BODY<sup class="text-red-500"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">JSON body for the POST|PUT|DELETE request</p>
                            <prism-editor
                                class="my-prism-editor"
                                style="min-height:200px;background:#2d2d2d;color: #ccc;resize:both"
                                v-model="docs[9]['body']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[9]['response'] && !docs[9]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[9]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[9]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[9]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[9]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[9]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[9]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[9]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[9]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[9]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[9]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[9]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[9]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[9]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[9]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[9]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[9]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[9]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[9]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[9]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                        <section class="pt-5 pl-2 pr-2 pb-5 border mb-10 rounded bg-white shadow" v-if="!docs[10]['isHidden']">
                <div class="font-sans" id="DELETE-api/contacts/{contact}">
                <h1 class="text-sm break-normal text-black bg-indigo-50 break-normal font-sans pb-1 pt-1 text-black">
                    <span class="w-20
                        font-medium
                        inline-flex
                        items-center
                        justify-center
                        px-2
                        py-1
                        text-xs
                        font-bold
                        leading-none
                        rounded
                        text--100 bg--500
                        text- bg--500
                        text--100 bg--500
                        text--100 bg--500
                        text-white bg-black
                        ">
                        DELETE
                    </span>
                    <span class="">
                        <a href="#api/contacts/{contact}">api/contacts/{contact}</a>
                    </span>
                </h1>
                </div>
                <hr class="border-b border-grey-light">

                <table class="table-fixed text-sm mt-5">
                    <tbody>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">HTTP Method</td>
                            <td class="align-left pl-2 pr-2 font-bold break-all">DELETE</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">URL</td>
                            <td class="align-left pl-2 pr-2 break-all">
                                <a target="_blank" href="{{window.location.origin}}/api/contacts/{contact}">{{window.location.origin}}/api/contacts/{contact}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller</td>
                            <td class="align-left pl-2 pr-2 break-all">App\Http\Controllers\ContactController</td>
                        </tr>
                        <tr>
                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Controller Method</td>
                            <td class="align-left pl-2 pr-2 break-all">@destroy</td>
                        </tr>
                                                    <tr>
                                <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Middleware 1</td>
                                <td class="align-left pl-2 pr-2 break-all">api</td>
                            </tr>
                                            </tbody>
                </table>
                <div v-if="docs[10]['docBlock']" class="border-2 mr-4 mt-4 p-4 rounded text-sm">
                    <h3 class="font-bold">LRD Docs</h3>
                    <vue-markdown></vue-markdown>
                </div>
                <br>
                                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[10]['try']"
                    v-on:click="docs[10]['try'] = !docs[10]['try'];docs[10]['cancel'] = !docs[10]['cancel']"
                >
                    Try
                </button>

                <button
                    class="hover:bg-red-500 font-semibold hover:text-white mt-2 pl-5 pr-5 border-gray-700 hover:border-transparent shadow-inner border-2 rounded-full"
                    v-if="!docs[10]['cancel']"
                    v-on:click="docs[10]['cancel'] = !docs[10]['cancel'];docs[10]['try'] = !docs[10]['try'];"
                >
                    Cancel
                </button>

                <button
                    v-if="docs[10]['try']"
                    @click="request(docs[10])"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 border-blue-800 border-2 shadow-inner mb-1 pl-5 pr-5 rounded-full"
                >
                    <svg
                        v-if="docs[10]['loading']"
                        class="animate-spin h-4 w-4 rounded-full bg-transparent border-2 border-transparent border-opacity-50 inline pr-2" style="border-right-color: white; border-top-color: white;" viewBox="0 0 24 24"></svg>
                    Run
                </button>

                <div class="grid grid-cols-1 mt-3 pr-2 overflow-auto">
                    <div class="">
                        <div v-if="docs[10]['try']">
                            <h3 class="font-medium">REQUEST URL<sup class="text-red-500 font-bold"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">Enter your request URL with query params</p>
                            <prism-editor class="my-prism-editor"
                            style="padding:15px 0px 15px 0px;min-height:20px;background:#2d2d2d;color: #ccc;resize:both;"
                            v-model="docs[10]['url']" :highlight="highlighter" line-numbers></prism-editor>
                            <br>
                                                        <h3 class="font-medium">REQUEST BODY<sup class="text-red-500"> *required</sup></h3>
                            <p class="text-xs pb-2 font-medium text-gray-500">JSON body for the POST|PUT|DELETE request</p>
                            <prism-editor
                                class="my-prism-editor"
                                style="min-height:200px;background:#2d2d2d;color: #ccc;resize:both"
                                v-model="docs[10]['body']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                                                    </div>
                    </div>
                    <hr class="border-b border-dotted mt-4 mb-2 border-gray-300">
                    <div class="grid grid-cols-2 gap-2" v-if="docs[10]['response'] && !docs[10]['cancel']">
                        <div class="border-r-2">
                            <h3 class="font-medium">
                                RESPONSE
                                <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                    Response status, code and time.
                                </p>
                            </h3>
                            <table class="table-fixed text-sm mt-5">
                                <tbody>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                            v-if="docs[10]['responseOk']"
                                            class="inline-flex  text-xs font-bold leading-none text-green-700">
                                                SUCCESS
                                            </span>
                                            <span
                                                v-if="!docs[10]['responseOk']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded">
                                                ERROR
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Status Code</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[10]['responseOk']"
                                                class="inline-flex text-xs font-bold text-green-900"
                                                v-text="docs[10]['responseCode']">
                                            </span>
                                            <span
                                                v-if="!docs[10]['responseOk']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[10]['responseCode']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Memory Usage</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[10]['memory']"
                                                class="inline-flex text-xs font-bold text-red-900"
                                                v-text="docs[10]['memory']">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Response Time</td>
                                        <td class="align-left pl-2 pr-2 break-all">
                                            <span
                                                v-if="docs[10]['responseTime']"
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded"
                                                v-text="docs[10]['responseTime'] + 'ms'">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-xs pt-2 pb-2 font-medium text-gray-500">
                                Response headers.
                            </p>
                            <prism-editor
                                v-if="docs[10]['responseHeaders']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="width:75%;min-height:100px;max-height:200px;background:#fefefe;color: rgb(66, 63, 63);resize:both"
                                readonly
                                v-model="docs[10]['responseHeaders']"
                                :highlight="highlighterAtom"
                                line-numbers></prism-editor>
                        </div>
                        <div>
                            <p class="text-xs pb-2 font-medium text-gray-800">Response from the server</p>
                            <prism-editor
                                v-if="docs[10]['response']"
                                class="my-prism-editor shadow-inner border-gray-400 border-2 rounded"
                                style="min-height:100px;max-height:300px;background:#2d2d2d;color: #ccc;resize:both"
                                readonly
                                v-model="docs[10]['response']"
                                :highlight="highlighter"
                                line-numbers></prism-editor>
                        </div>
                        <div class="border-r-2">
                            <h3 class="font-medium mt-10">
                                SQL
                            </h3>
                            <p v-if="!docs[10]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                No SQL queries executed for this request.
                            </p>
                            <p v-if="docs[10]['queries'].length" class="text-xs pb-2 font-medium text-gray-500">
                                SQL queries executed for this request.
                                <table class="table-fixed text-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Queries</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <div v-text="docs[10]['queries'].length"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-left pl-2 pr-2 bg-gray-100 border-r-2">Total Query time</td>
                                            <td class="align-left pl-2 pr-2 break-all">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-400 rounded">
                                                    <span v-text="docs[10]['queries'].reduce((total, query) => total + query.time, 0).toFixed(2)"></span>ms
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                        <div class="">
                                <p class="text-xs mt-10 font-medium text-gray-500">
                                    SQL queries
                                </p>
                                <div v-for="(query, index) in docs[10]['queries']">
                                    <p class="mt-2 text-sm font-medium">{{index+1}}.
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-yellow-500 rounded mb-1">
                                            {{query.time}}ms
                                        </span>
                                    </p>
                                    <prism-editor
                                        v-model="sqlFormatter.format(query['sql'])"
                                        class="my-prism-editor"
                                        style="padding:10px 0px 10px 0px;min-height:20px;max-height:350px;background:rgb(52 33 33);color: #ccc;resize:both;"
                                        readonly
                                        :highlight="highlighter"
                                        line-numbers></prism-editor>
                                </div>
                        </div>
                    </div>
                  </div>
            </section>
                     </div>
      </div>
      <script>
        var guessValue = function(attribute, rules) {
            // match max:1
            var validations = {
                max: 100,
                min: 1,
                isInteger: null,
                isString: null,
                isArray: null,
                isDate: null,
                isIn: null,
                value: '',
            }
            rules.map(function(rule) {
                validations.isRequired = rule.match(/required/)
                validations.isDate = rule.match(/date/)
                validations.isArray = rule.match(/array/)
                validations.isString = rule.match(/string/)
                if (rule.match(/integer/)) {
                    validations.isInteger = true
                }
                if (rule.match(/min:([0-9]+)/)) {
                    validations.min = rule.match(/min:([0-9]+)/)[1]
                    if (!validations.min) {
                        validations.min = 1
                    }
                }
                if (rule.match(/max:([0-9]+)/)) {
                    validations.max = rule.match(/max:([0-9]+)/)[1]
                    if (!validations.max) {
                        validations.max = 100
                    }
                }
            })

            if (validations.isString) {
                validations.value = faker.name.findName()
            }
            if (validations.isInteger) {
                validations.value = Math.floor(Math.random() * (validations.max - validations.min + 1) + validations.min)
            }
            if (validations.isDate) {
                validations.value = new Date(faker.date.between(new Date(), new Date())).toISOString().slice(0, 10)
            }

            return validations
        }
        var docs = [{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"],"middlewares":["web"],"controller":"CsrfCookieController","controller_full_path":"Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController","method":"show","httpMethod":"GET","rules":[],"docBlock":""},{"uri":"api\/contacts","methods":["GET","HEAD"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"index","httpMethod":"GET","rules":[],"docBlock":""},{"uri":"api\/contacts\/create","methods":["GET","HEAD"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"create","httpMethod":"GET","rules":[],"docBlock":""},{"uri":"api\/contacts\/{contact}","methods":["GET","HEAD"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"show","httpMethod":"GET","rules":[],"docBlock":""},{"uri":"api\/contacts\/{contact}\/edit","methods":["GET","HEAD"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"edit","httpMethod":"GET","rules":[],"docBlock":""},{"uri":"api\/contacts\/search\/{parameter}","methods":["GET","HEAD"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"search","httpMethod":"GET","rules":[],"docBlock":""},{"uri":"api\/contacts","methods":["POST"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"store","httpMethod":"POST","rules":[],"docBlock":""},{"uri":"api\/contacts\/get-contact","methods":["POST"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"getContact","httpMethod":"POST","rules":[],"docBlock":""},{"uri":"api\/contacts\/{contact}","methods":["PUT","PATCH"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"update","httpMethod":"PUT","rules":[],"docBlock":""},{"uri":"api\/contacts\/{contact}","methods":["PUT","PATCH"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"update","httpMethod":"PUT","rules":[],"docBlock":""},{"uri":"api\/contacts\/{contact}","methods":["DELETE"],"middlewares":["api"],"controller":"ContactController","controller_full_path":"App\\Http\\Controllers\\ContactController","method":"destroy","httpMethod":"DELETE","rules":[],"docBlock":""}];
        var app_url = "http:\/\/localhost";

        //remove trailing slash if any
        app_url = app_url.replace(/\/$/, '')
        docs.map(function(doc, index) {
            doc.response = null
            doc.responseCode = 200
            doc.queries = []
            doc.responseOk = null
            doc.body = "{}"
            doc.isActiveSidebar = window.location.hash.substr(1) === doc['methods'][0] +"-"+ doc['uri']
            doc.url = app_url + "/"+ doc.uri
            doc.try = false
            doc.cancel = true
            doc.loading = false
            doc.responseTime = null
            doc.memory = null
            // check in array
            if (doc.methods[0] == 'GET') {
                var idx = 1
                Object.keys(doc.rules).map(function(attribute) {
                    // check contains in string
                    if (attribute.indexOf('.*') !== -1) {
                        return
                    }
                    let value = guessValue(attribute, doc.rules[attribute])
                    if (!value.isRequired) {
                        //return
                    }

                    let attr = attribute
                    if (value.isArray) {
                        attr = attribute + "[]"
                    }
                    if (idx === 1) {
                        doc.url += "\n"+ "?"+attr+"="+value.value+"\n"
                    } else {
                        doc.url += "&"+attr+"="+value.value+"\n"
                    }
                    idx++
                })
            }

            // assume to be POST, PUT, DELETE
            if (doc.methods[0] != 'GET') {
                body = {}
                Object.keys(doc.rules).map(function(attribute) {
                    // ignore the child attributes
                    if (attribute.indexOf('.*') !== -1) {
                        return
                    }
                    let value = guessValue(attribute, doc.rules[attribute])
                    if (value.isArray) {
                        body[attribute] = [value.value]
                    } else {
                        body[attribute] = value.value
                    }
                })
                doc.body = JSON.stringify(body, null, 2)
            }

        })
        Vue.use(VueMarkdown);

        var app = new Vue({
            el: '#app',
            data: {
                docs: docs,
                showRoute: false,
                requestHeaders: '',
                filterTerm: ''
            },
            created: function () {
                axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                axios.defaults.headers.common['Authorization'] = 'Bearer '
                this.requestHeaders = JSON.stringify(axios.defaults.headers.common, null, 2)
            },
            methods: {
                highlightSidebar(idx) {
                    docs.map(function(doc, index) {
                        doc.isActiveSidebar = index == idx
                    })
                },
                highlighter(code) {
                    return Prism.highlight(code, Prism.languages.js, "js");
                },
                highlighterAtom(code) {
                    return Prism.highlight(code, Prism.languages.atom, "js");
                },
                filterDocs() {
                    for (doc of this.docs) {
                        doc['isHidden'] = !doc['uri'].includes(this.filterTerm)
                    }
                },
                request(doc) {

                    // convert string to lower case
                    var method = doc['methods'][0].toLowerCase()

                    // remove \n from string that is used for display
                    var url = doc.url.replace(/\n/g, '')

                    try {
                        var json = JSON.parse(doc.body.replace(/\n/g, ''))
                    } catch (e) {
                        doc.response = "Cannot parse JSON request body"
                        return
                    }

                    try {
                        axios.defaults.headers.common = JSON.parse(this.requestHeaders)
                        axios.defaults.headers.common['X-Request-LRD'] = 'lrd'
                    } catch (e) {
                        doc.response = "Cannot parse JSON request headers"
                        return
                    }
                    doc.queries = []
                    doc.response = null
                    doc.responseOk = null
                    doc.responseTime = null
                    doc.responseHeaders = null
                    doc.loading = true

                    let startTime = new Date().getTime();
                    axios({
                        method: method,
                        url: url,
                        data: json,
                        decompress: true,
                        withCredentials: true
                      }).then(response => {
                        console.log("response", response)
                        doc.responseOk = true
                        if (response && response.data) {
                            if (response.data['_lrd']) {
                                doc.queries = response.data['_lrd']['queries']
                                doc.memory = response.data['_lrd']['memory']
                                delete response.data['_lrd']
                            }
                            doc.response = JSON.stringify(response.data, null, 2)
                            doc.responseCode = response.status
                            doc.responseHeaders = JSON.stringify(response.headers, null, 2)
                        }

                      }).catch(error => {
                        doc.responseOk = false
                        console.log("error", error)
                        if (error && error.response && error.response.data) {
                            console.log("error response", error.response)
                            if (error.response.data['_lrd']) {
                                doc.queries = error.response.data['_lrd']['queries']
                                doc.memory = error.response.data['_lrd']['memory']
                                delete error.response.data['_lrd']
                            }
                            doc.responseCode = error.response.status;
                            doc.responseHeaders = JSON.stringify(error.response.headers, null, 2)
                            doc.response = JSON.stringify(error.response.data, null, 2)
                        }

                      }).then(function () {
                        let endTime = new Date().getTime()
                        doc.loading = false
                        doc.responseTime = endTime - startTime;
                      })
                },
            },
          });
      </script>
   </body>
</html>
