How to start upgrading Drupal 7 modules to Drupal 8
======

# Init GitHub repo for 8.* branch.
1. Clone latest 7.x version from drupal.org:

    ```
    git clone --branch 7.x-1.x USERNAME@git.drupal.org:project/PROJECT_NAME.git
    ```
  
2. Create new branch 8.x-1.x based on latest Drupal 7 code:

    ```
    cd PROJECT_NAME
    git checkout -b 8.x-1.x
    ```
    
3. Move Drupal 7 code into `drupal7` folder and commit changes:

    ```
    mkdir drupal7
    git mv $(ls | grep -vi "drupal7") drupal7
    ```
    
4. Create GitHub repository, commit code and push code to GitHub
5. Clone Vagrant Box for maintainers https://github.com/drupal-ukraine/maintainer to some place:

    ```
    git clone git@github.com:drupal-ukraine/maintainer.git
    cp -r maintainer/* ./
    cp maintainer/.gitignore ./
    rm -Rf maintainer
    ```
6. Create module folder in Drupal 8 code and move Drupal 7 code:

    ```
    mkdir -p d8/modules/custom/PROJECT_NAME
    mv drupal7 d8/modules/custom/PROJECT_NAME
    ```
    
7. Commit code and push to GitHub

# Prepare repo for drupal.org

Now you are ready to start working on Drupal 8 porting. Once you're ready to push Drupal 8 code to drupal.org run followign command in order to prepare repository and remove unnecessary code:

1. Filter commits and leavel only module files:

    ```
    git filter-branch --subdirectory-filter d8/modules/custom/PROJECT_NAME HEAD
    ```
More details https://github.com/propeoplemd/cibox/wiki/How-to-eject-the-custom-code-for-drupal.org
2. Push this code to drupal.org(for maintainers):
    ```
    git push origin 8.x-1.x
    ```
    
