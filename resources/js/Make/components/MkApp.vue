<template>
   <el-container>
      <el-aside width="200px">
         <mk-sider/>
      </el-aside>
      <el-container>
         <el-header>Header</el-header>
         <el-main>
            <router-view/>
         </el-main>
      </el-container>
   </el-container>
</template>

<script>
export default {
   name: "MkApp",
}
</script>

<style lang="scss">
</style>